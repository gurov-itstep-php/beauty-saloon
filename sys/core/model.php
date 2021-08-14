<?php

namespace sys\core;

use \sys\lib\Provider as Provider;

class Model extends Provider {

    public function execute_dml_query($sql, $param = []) {
        if(count($param) === 0 ) {
            $this->conn->query($sql);
            //echo('<h3>execute_dml_query without_params - Ok!</h3>');
        } else {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($param);
            //echo('<h3>execute_dml_query with_params - Ok!</h3>');
        }
    }

    public function execute_select_query($sql, $param = []) {
        if(count($param) === 0 ) {
            $stmt = $this->conn->query($sql);
        } else {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($param);
        }
        return $stmt->fetchAll(\PDO::FETCH_ASSOC); // возвращает: получить всё (в формате ассоциат.массива)
    }

    public function test() {
        echo('<h3>Model -Ok!</h3>');
        print_r($this->conn);
    }
}