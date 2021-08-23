<?php

namespace app\forms;

use \sys\core\Form as Form;
use \sys\lib\Field as Field;

class ProductForm extends Form {

    public function __construct() {
        $this->name = 'productform';
        $this->className = 'product-form';
        $this->methodName = 'post';
        $this->actionPath = '#';
        $this->enctype = 'multyparform-data';
        $this->fields = [
            new Field('title', 'input', 'text', 'form-control'),
            new Field('category', 'select', '-', 'form-control'),
            new Field('specialist', 'select', '-', 'form-control'),
            new Field('about', 'textarea', '-', 'form-control'),
            new Field('image', 'input', 'file', 'form-control'),
            new Field('lastpublish', 'input', 'date', 'form-control'),
            new Field('lastvideo', 'input', 'url', 'form-control'),
            new Field('price', 'input', 'number', 'form-control')
        ];
    }
}