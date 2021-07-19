<?php

require_once __DIR__.'/../common/dbconnection.php';

class Student{

    public $id;
    public $name;
    public $city;
    public $nic;

    public static function getAll(){
        $con = new DBConnection();
        $sql = "select * from student";
        $result = $con->query($sql); 
        $con->close();   
        return $result;
    }

    // public static function getById($searchId){
    //     $con = new DBConnection();
    //     $sql = "select * from student where id=$searchId";
    //     $result = $con->query($sql); 
    //     $con->close();   
    //     return $result->fetch_object();
    // }
}