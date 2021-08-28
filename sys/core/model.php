<?php

namespace sys\core;

use \sys\lib\Provider as Provider;

class Model extends Provider {

    public function execute_dml_query($sql, $param = []) {
        if(count($param) === 0 ) {
            $this->conn->query($sql);
        } else {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($param);
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