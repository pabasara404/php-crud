<?php

require_once __DIR__.'/../../common/dbconnection.php';

$id = $_POST['id'];
$name = trim($_POST['name']);
$city = trim($_POST['city']);
$nic = trim($_POST['nic']);

//basic validation
$crit1=$name !="";
$crit2=$city !="";
$crit3=$nic !="";
$crit4=strlen($name)>=3;
$crit5=strlen($city)>=2;
$crit6=strlen($nic)==10||strlen($nic)==12;



if(!$crit1) echo("Name is required!<br/>");
if(!$crit2) echo("City is required!<br/>");
if(!$crit3) echo("NIC is required!<br/>");
if(!$crit4) echo("name must have at least 3 characters<br/>");
if(!$crit5) echo("city must have at least 2 characters<br/>");
if(!$crit6) echo("NIC name must have at least 10 or 12 characters<br/>");

if(!$crit1 || !$crit2 || !$crit3|| !$crit4|| !$crit5|| !$crit6) exit("something is wrong");


//__DIR__C:\wamp64\www\6-7-21
$con = new DBConnection();
//database validation
$nicSql="select * from student where nic='$nic'";
$result=$con->query($nicSql);
// var_dump($result);
$studentByNIC = $result->fetch_object();
if($studentByNIC != null) {
    if($studentByNIC->id != $id){
        exit("NIC already exists");
    }
}

$sql = "update student set name='$name', city='$city', nic='$nic' where id=$id";


$success=$con->query($sql);
if ($success === TRUE) {
    echo "New record created successfully". "<br>";
  } else {
    echo "Error: " . $sql . "<br>" . $con->error. "<br>";
  }


$con->close();//auto close wenwa configure krala thyeddi

if($success){
  header("location:detail.php?id=$id");
}else{
  echo " Something is wrong";
}

?>