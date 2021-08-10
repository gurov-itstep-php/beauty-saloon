<?php

session_start();
require_once('sys/lib/autoloader.php');

// Tests
//---------------------------------------
//echo('<h3>Front-Controller: OK</h3>');
$testObject = new \sys\core\Test;