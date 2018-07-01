<?php
/**
 * Created by PhpStorm.
 * User: tharindu
 * Date: 7/1/18
 * Time: 4:28 PM
 */
class ShareModel extends Model{
    public function Index(){
        $this->query('SELECT * FROM shares');
        $rows = $this->resultSet();
        return $rows;
    }
}