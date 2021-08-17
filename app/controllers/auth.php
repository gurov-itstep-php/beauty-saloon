<?php

namespace app\controllers;

use \sys\core\View as View;
use \app\models\User as User;
use \app\forms\Regform as Regform;
use \sys\core\Controller as Controller;
use \sys\lib\Mailer as Mailer;

class Auth extends Controller {

    public function __construct() {
        parent::__construct(new User());
    }

    public function reg() {
        $form = new Regform();
        if (empty($_POST['submit'])) {
            return new View('auth/reg.php', [
                'title' => 'Регистрация',
                'form' => $form,
                'script' => View::RES.'/js/reg.js'
            ]);
        } else {
            //
            $form->fill();
            //
            $login = $form->fields[0]->fieldValue;
            $passw = md5($form->fields[1]->fieldValue);
            $email = $form->fields[3]->fieldValue;
            $regdate = date('Y-m-d H:i:s');
            $role_id = 3;
            $status_id = 1; // new_user
            $confirm = 'no';
            ///
            $this->model->register($login, $passw, $email, $regdate, $role_id, $status_id, $confirm);
            ///
            // mail ...
            $mailer = new Mailer($email);
            $mailer->send();
            ///
            $message = "Вы пытаетесь зарегистрироваться на сайте <b>Beauty-Saloon Careo</b><hr>";
            $message .= "На указанный вами e-mail: <b>$email</b> отправлено письмо,<br>";
            $message .= "в котором содержится ссылка на подтверждение Вашей регистрации.<hr>";
            $color = 'darkred';
            //
            return new View('auth/reginfo.php', [
                'title' => 'Register-Info',
                'message' => $message,
                'color' => $color
            ]);
        }
    }

    public function confirm($email) {
        $this->model->reg_confirm($email);
        return new View('auth/confirm.php', [
            'title' => 'Register-Confirm',
            'message' => "Регистрация пользователя <b>$email</b> - успешно подтверждена!",
            'color' => 'darkred'
        ]);
    }

    public function entry() {
        return new View('auth/entry.php', [
            'title' => 'Авторизация'
        ]);        
    }

    //--------------------------------------------ajax
    public function ajax_check_login() {
        //echo('ajax-OK!');
        $loginX = $_POST['login'];
        if ($this->model->check_login($loginX)) {
            echo('свободен');
        } else {
            echo('занят');
        }
    }
}