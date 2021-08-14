<?php

namespace sys\lib;

require_once('sys/config/database.php');

class Provider {

    protected $conn;

    public function __construct() {
        $host = DB_HOST;
        $name = DB_NAME;
        $conn_str = "mysql:host=$host;dbname=$name"; // строка подключения
        $this->conn = new \PDO($conn_str, DB_USER, DB_PASS); // инициализация подключения к бд
        //echo('<h3>Provider - OK!</h3>');
    }
}