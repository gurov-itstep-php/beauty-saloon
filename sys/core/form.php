<?php

namespace sys\core;

use \sys\lib\Field as Field;
use \app\models\User;

class Form {

    public $name;
    public $className;
    public $methodName;
    public $actionPath;
    public $enctype;
    public $fields;

    public function generate() {
        echo('<form');
        echo(' id="'.$this->name.'"');
        echo(' class="'.$this->className.'"');
        echo(' method="'.$this->methodName.'"');
        echo(' action="'.$this->actionPath.'"');
        //
        if($this->enctype !== '') {
            echo(' enctype="'.$this->enctype.'"');
        }
        //*
        if ($this->name === 'regform') {
            echo(' onsubmit="return false"'); //валидация
        }
        echo('>');
        //
        if(is_array($this->fields) && count($this->fields) > 0) {
            foreach ($this->fields as $field) {
                if ($field instanceof Field) {
                    echo('<div class="form-group">');
                    //*
                    if ($field->name !== 'stand') {
                        echo('<label for="'.$field->name.'">');
                        echo(ucfirst($field->name).':');
                        echo('</label>');
                        $field->generate();
                    } else {
                        //*
                        echo('<p style="text-align: center; margin: 30px 0px -10px 0px">');
                        echo('<input type="checkbox" id="stand" name="stand" value="yes">');
                        echo('&nbsp;');
                        echo('<label for="stand">Оставаться в системе</label>');
                        echo('</p>');
                    }
                        //
                    echo('<div class="error"');
                    echo(' id="'.$field->name.'-error">');
                    echo('');
                    echo('</div>');
                        //
                    echo('</div>');
                }
            }
        }
        //
        echo('<center><div class="btn-group">');
        echo('<input type="submit" id="submit" name="submit" value="Отправить" class="btn btn-outline-success" />');
        echo('<input type="reset" id="reset" name="reset" value="Очистить" class="btn btn-outline-dark" />');
        echo('</div></center>');
        //
        echo('</form>');
    }

    public function generate_with_velues() {
        echo('<form');
        echo(' id="'.$this->name.'"');
        echo(' class="'.$this->className.'"');
        echo(' method="'.$this->methodName.'"');
        echo(' action="'.$this->actionPath.'"');
        //
        if($this->enctype !== '') {
            echo(' enctype="'.$this->enctype.'"');
        }
        //*
        if ($this->name === 'regform') {
            echo(' onsubmit="return false"'); //валидация
        }
        echo('>');
        //
        if(is_array($this->fields) && count($this->fields) > 0) {
            foreach ($this->fields as $field) {
                if ($field instanceof Field) {
                    echo('<div class="form-group">');
                    //*
                    if ($field->name !== 'stand') {
                        echo('<label for="'.$field->name.'">');
                        echo(ucfirst($field->name).':');
                        echo('</label>');
                        $field->generate_with_value();
                    } else {
                        //*
                        echo('<p style="text-align: center; margin: 30px 0px -10px 0px">');
                        echo('<input type="checkbox" id="stand" name="stand" value="yes">');
                        echo('&nbsp;');
                        echo('<label for="stand">Оставаться в системе</label>');
                        echo('</p>');
                    }
                        //
                    echo('<div class="error"');
                    echo(' id="'.$field->name.'-error">');
                    echo('');
                    echo('</div>');
                        //
                    echo('</div>');
                }
            }
        }
        //
        echo('<center><div class="btn-group">');
        echo('<input type="submit" id="submit" name="submit" value="Отправить" class="btn btn-outline-success" />');
        echo('<input type="reset" id="reset" name="reset" value="Очистить" class="btn btn-outline-dark" />');
        echo('</div></center>');
        //
        echo('</form>');
    }

    public function fill() {
        if(is_array($this->fields) && count($this->fields) > 0) {
            foreach ($this->fields as $field) {
                if(isset($_POST[$field->name])) {
                    $field->fieldValue = $_POST[$field->name];
                }
                // загрузка файлов(бинарников) производится через глобальный массив $_FILES[]:
                if (isset($_FILES[$field->name])) {
                    $field->fieldValue = $_FILES[$field->name];
                }
            }
        }
    }
}