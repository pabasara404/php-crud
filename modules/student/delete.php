<?php

$id=$_GET['id'];
require_once __DIR__.'/../../common/dbconnection.php';

$con = new DBConnection();

$sql="delete from student where id = $id";

$success =$con->query($sql);

if($success){
    header('location:table.php');
}else{
    echo "Not Successful";
}




$con->close(); 
?> 