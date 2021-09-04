<?php

namespace app\models;

use \sys\core\Model as Model;

class Category extends Model {

    public function add_category($categoryName) {
        //
        $sql = "insert into categories (name) values (?)";
        $params = [$categoryName];
        $this->execute_dml_query($sql, $params);
    }

    public function del_category($categoryId) {
        //
        $sql = "delete from categories where id=?";
        $params = [$categoryId];
        $this->execute_dml_query($sql, $params);
    }

    public function update_category($categoryName, $categoryId) {
        //
        $sql = "update categories set name=? where id=?";
        $params = [$categoryName, $categoryId];
        $this->execute_dml_query($sql, $params);
    }

    public function get_all_categories() {
        //
        $sql = 'select * from categories order by id';
        $result = $this->execute_select_query($sql);
        return $result;
    }

    public function get_category_name($categoryId) {
        $sql = 'select name from categories where id=?';
        $params = [$categoryId];
        $result = $this->execute_select_query($sql, $params);
        return current($result[0]);
    }

    public function check_name($categoryName) {
        $sql = 'select name from categories where name=?';
        $params = [$categoryName];
        $result = $this->execute_select_query($sql, $params);
        //
        if (count($result) === 0) {
            return true;
        } else {
            return false;
        }
    }
}