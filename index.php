<?php

session_start();
require_once('sys/lib/autoloader.php');

// TestsТесты базовых и ключевых классов:
//---------------------------------------
/*
$provider = new \sys\lib\Provider;
$model = new \sys\core\Model;
//$model->test();
*/
/*
$result = $model->execute_select_query('select * from roles');
echo('<pre>');
print_r($result);
echo('</pre>');
*/
//$model->execute_dml_query("insert into roles (name) values ('admin')");
//$model->execute_dml_query("insert into roles (name) values (?)", ['moder']);
//$model->execute_dml_query("insert into roles (name) values (?)", ['user']);

//echo('<h3>Front-Controller: OK</h3>');
/*
$testObject = new \sys\core\Test;
$baseController = new \sys\core\Controller;
*/
//$homeController = new \app\controllers\Home;
//$homeController->index();
/*
$homeController->about();
$homeController->contact();
*/