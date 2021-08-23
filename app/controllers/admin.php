<?php

namespace app\controllers;

use \sys\core\Controller as Controller;
use \sys\core\View as View;

class Admin extends Controller {

    public function index() {
        return new View('admin/index.php', [
            'title' => 'Админ-панель'
        ]);
    }
}