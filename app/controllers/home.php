<?php

namespace app\controllers;

use \sys\core\Controller as Controller;

class Home extends Controller {
    public function index() {
        echo("<h4>Загрузка представления главной страницы ...</h4>");
    }

    public function about() {
        echo("<h4>Загрузка представления страницы about ...</h4>");
    }

    public function contact() {
        echo("<h4>Загрузка представления страницы contact ...</h4>");
    }
}
