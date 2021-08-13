<?php

namespace app\controllers;

use \sys\core\View as View;
use \sys\core\Controller as Controller;

class Home extends Controller {
    public function index() {
        //echo("<h4>Загрузка представления главной страницы ...</h4>");
        return new View('home/index.php', [
            'par1' => "home/index.php",
            'par2' => 'Главная страница',
            'par3' => [100, 200, 300],
            'par4' => 3.14
        ]);
    }

    public function about() {
        //echo("<h4>Загрузка представления страницы about ...</h4>");
        return new View('home/about.php');
    }

    public function contact() {
        //echo("<h4>Загрузка представления страницы contact ...</h4>");
        return new View('home/contact.php');
    }
}
