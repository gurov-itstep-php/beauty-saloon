<?php

namespace app\forms;

use \sys\core\Form as Form;
use \sys\lib\Field as Field;

class InitCategoryForm extends Form {

    public function __construct($categoryName) {
        $this->name = 'categoryform';
        $this->className = 'category-form';
        $this->methodName = 'post';
        $this->actionPath = '#';
        $this->enctype = '';
        $this->fields = [
            new Field('title', 'input', 'text', 'form-control', $categoryName)
        ];
    }
}