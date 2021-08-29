<?php

namespace app\forms;

use \sys\core\Form as Form; //#
use \sys\lib\Field as Field; //#

class SendMailform extends Form {

    public function __construct() {
        $this->name = 'sendmailform';
        $this->className = 'sendmail-form';
        $this->methodName = 'post';
        $this->actionPath = '#';
        $this->enctype = '';
        $this->fields = [
            new Field('subject', 'input', 'text', 'form-control'),
            new Field('message', 'textarea', 'text', 'form-control') 
        ];
    } 
}