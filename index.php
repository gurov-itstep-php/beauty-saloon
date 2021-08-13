<?php

session_start();
require_once('sys/lib/autoloader.php');

// TestsТесты базовых и ключевых классов:
//---------------------------------------
//echo('<h3>Front-Controller: OK</h3>');
/*
$testObject = new \sys\core\Test;
$baseController = new \sys\core\Controller;
*/
$homeController = new \app\controllers\Home;
$homeController->index();
/*
$homeController->about();
$homeController->contact();
*/