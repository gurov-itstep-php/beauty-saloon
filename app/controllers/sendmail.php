<?php

namespace app\controllers;

use \sys\core\Controller as Controller;
use \sys\core\View as View;
use \app\models\User as User;
use \app\forms\SendMailform as SendMailform;
use \sys\lib\SendMailer as SendMailer;
use \sys\lib\Status as Status;

class SendMail extends Controller
{

    public function __construct()
    {
        parent::__construct(new User());
    }

    public function index()
    {
        $userName = Status::get_current_user(); // получаю имя текущего пользователя
        //
        /*var_dump($userName);
        echo("<br>");
        var_dump($userEmail);*/
        if($userName !== 'Guest') {
            $userEmail = strval(current($this->model->get_uesr_email_by_ligin($userName)[0]));
            $form = new SendMailform();
            $form->fill();
            //
            if (empty($_POST['submit'])) {
                return new View('sendmail/index.php', [
                    'title' => 'Обратная связь',
                    'form' => $form
                ]);
            }
            $subject = $form->fields[0]->fieldValue;
            $mess = $form->fields[1]->fieldValue;
            //
            $sendmailer = new SendMailer($userEmail, $userName, $subject, $mess);
            $sendmailer->send();
            //
            $message = "Письмо отправлено администрации сайта Beauty-Saloon Careo<hr>";
            $message .= '<h4 style="text-align: left;">Пользователь: '.$userName.', E-mail: '.$userEmail.'</h4>';
            $message .= '<h4 style="text-align: left;">Тема сообщения: '.$subject.'</h4>';
            $message .= '<h4 style="text-align: left;">Текст сообщения: </h4>';
            $message .= '<p style="text-align: left;">'.$mess.'</p><hr>';
            $color = 'darkgreen';
            //
            return new View('sendmail/sendmailinfo.php', [
                'title' => 'Sendmail - info!',
                'message' => $message,
                'color' => $color
            ]);
        
        } else {
            $message = 'Для авторизации перейдите по ссылке: <a href="http://localhost/php/beauty-saloon/auth/entry">Войти в систему</a><br><hr>';
            $message .= "Если Вы еще не зарегистрированы на сайте Beauty-Saloon Careo,<br> пожалуйста зарегистрируйтесь по ссыле: ";
            $message .= '<a href="http://localhost/php/beauty-saloon/auth/reg">Зарегистрироваться</a>';
            $color = 'darkgreen';
            new View('sendmail/sendmailguest.php', [
                'title' => 'Обратная связь',
                'message' => $message,
                'color' => $color
            ]);
        }
    }
}