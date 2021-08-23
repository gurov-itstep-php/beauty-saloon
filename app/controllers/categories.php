<?php

namespace app\controllers;

use \app\models\Category as Category; //*
use \app\forms\CategoryForm as CategoryForm; //*
use \sys\core\Controller as Controller;
use \sys\core\View as View;

class Categories extends Controller
{

    public function __construct()
    {
        parent::__construct(new Category());
    }

    public function index()
    {

        return new View('categories/index.php', [
            'title' => 'Управление категориями'
        ]);
    }

    public function create()
    {
        // get:
        $form = new CategoryForm();
        if (empty($_POST['submit'])) {
            return new View('categories/create.php', [
                'title' => 'Добавление категории',
                'form' => $form
            ]);
        } else {
            // post:
            
        }
    }

    public function update($categoryId)
    {
        return new View('categories/update.php', [
            'title' => 'Обновление категории'
        ]);
    }

    public function delete($categoryId)
    {
        return new View('categories/delete.php', [
            'title' => 'Удаление категории'
        ]);
    }
}
