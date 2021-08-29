<?php

namespace sys\lib;

use app\controllers\SendMail;

class SendMailer {
    public $to;      // кому
    public $from;    // от кого
    public $subject; // тема
    public $message; // текст сообщения
    public $headers; // заголовки

    public function __construct($from, $user, $subject, $msg) {
        $this->to = 'gurov.anatoliy@gmail.com';
        $this->from = $from;
        $this->subject = 'Beauty-Saloon Careo | От: '.$user.' | Тема: '.$subject;
        $this->message = $this->build_message($msg);
        $this->headers = $this->build_headers();
    }

    private function build_message($msg) {
        $html = '';
        $html .= '<html><body>';
        $html .= '<h4>E-mail отправителя: '.$this->from.'</h4>';
        $html .= '<h4>login: '.$this->user.'</h4>';
        //$html .= '<h4>'.$this->subject.'</h4>';
        $html .= '<h5>Текст сообщения:<br></h5>';
        $html .= '<p>'.$msg.'</p><hr>';
        $html .= '</body></html>';
        return $html;
    }

    private function build_headers() {
        $headers = "";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "From: $this->from\r\n";
        return $headers;
    }

    public function send() {
        mail($this->to, $this->subject, $this->message, $this->headers);
    }
}