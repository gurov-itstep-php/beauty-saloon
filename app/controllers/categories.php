<?php

namespace app\controllers;

use \app\models\Category as Category; //*
use \app\forms\CategoryForm as CategoryForm; //*
use \app\forms\InitCategoryForm as InitCategoryForm;
use \sys\core\Controller as Controller;
use \sys\core\View as View;
use \sys\lib\Status as Status; //*

class Categories extends Controller
{

    public function __construct()
    {
        parent::__construct(new Category());
    }

    public function index()
    {
        return new View('categories/index.php', [
            'title' => 'Управление категориями',
            'categories' => $this->model->get_all_categories()
        ]);
    }

    public function redirect()
    {
        return new View('categories/redirect.php');
    }

    // [Auth!]
    public function create()
    {
        // check status:
        $grantUser = 'admin123';
        // deny ->
        if (Status::get_current_user() !== $grantUser) {
            return new View('errors/forbidden.php', [
                'title' => 'Page-403'
            ]);
        } else {
            // work ->
            $form = new CategoryForm();

            if (empty($_POST['submit'])) {
                // get:
                return new View('categories/create.php', [
                    'title' => 'Добавление категории',
                    'form' => $form //,
                    //'script' => View::RES.'/js/categorycreate.js'
                ]);
            } else {
                // post:
                $form->fill();
                $categoryName = $form->fields[0]->fieldValue;
                $this->model->add_category($categoryName);
                // Redirect to Categorylist:
                // ------------------------------------------------
                $this->redirect();
            }
        }
    }

    // [Auth!]
    public function delete($categoryId)
    {
        $grantUser = 'admin123';
        if (Status::get_current_user() !== $grantUser) {
            return new View('errors/forbidden.php', [
                'title' => 'Page-403'
            ]);
        } else {
            // work ->
            $name = $this->model->get_category_name($categoryId);
            $initForm = new InitCategoryForm($name);
            if (empty($_POST['submit'])) {
                // get:
                return new View('categories/delete.php', [
                    'title' => 'Удаление категории',
                    'form' => $initForm
                ]);
            } else {
                // post:
                $this->model->del_category($categoryId);
                $this->redirect();
            }
        }
    }

    // [Auth!]
    public function update($categoryId)
    {
        $grantUser = 'admin123';
        if (Status::get_current_user() !== $grantUser) {
            return new View('errors/forbidden.php', [
                'title' => 'Page-403'
            ]);
        } else {
            // work ->
            $name = $this->model->get_category_name($categoryId);
            $initForm = new InitCategoryForm($name);
            if (empty($_POST['submit'])) {
                // get:
                return new View('categories/update.php', [
                    'title' => 'Обновление категории',
                    'form' => $initForm
                ]);
            } else {
                // post:
                $form = new CategoryForm();
                $form->fill();
                $categoryName = $form->fields[0]->fieldValue;
                $this->model->update_category($categoryName, $categoryId);
                // Redirect to Categorylist:
                // ------------------------------------------------
                $this->redirect();
            }
        }
    }

    //----------------------------------------------------ajax
    public function ajax_check_name()
    {
        $nameX = $_POST['title'];
        if ($this->model->check_name($nameX)) {
            echo ('свободно');
        } else {
            echo ('занято');
        }
    }
}
