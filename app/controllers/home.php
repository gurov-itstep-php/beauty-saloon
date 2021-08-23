<?php

namespace app\controllers;

use \sys\core\View as View;
use \sys\core\Controller as Controller;

class Home extends Controller {
    public function index() {
        return new View('home/index.php', [
            'title' => 'Главная'
        ]);
    }

    public function about() {
        return new View('home/about.php', [
            'title' => 'О салоне'
        ]);
    }

    public function feedback() {
        return new View('home/feedback.php', [
            'title' => 'Отзывы'
        ]);
    }

    public function contact() {
        return new View('home/contact.php', [
            'title' => 'Контакты'
        ]);
    }

    //--------------------------------------------ajax
}
