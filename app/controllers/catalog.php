<?php

namespace app\controllers;

use \app\models\Product as Product;
use \app\forms\ProductForm as ProductForm;
use \sys\core\Controller as Controller;
use \sys\core\View as View;

class Catalog extends Controller {

    public function __construct() {
        parent::__construct(new Product());
    }

    public function index() {
        return new View('catalog/index.php', [
            'title' => 'Меню услуг'
        ]);
    }

    public function create() {
        return new View('catalog/create.php', [
            'title' => 'Добавление услуги'
        ]);
    }

    public function update() {
        return new View('catalog/update.php', [
            'title' => 'Обновление услуги'
        ]);
    }

    public function delete() {
        return new View('catalog/delete.php', [
            'title' => 'Удаление услуги'
        ]);
    }

    public function details() {
        return new View('catalog/details.php', [
            'title' => 'Детали услуги'
        ]);
    }
}
