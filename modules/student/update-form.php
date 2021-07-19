<?php
   
    $id = $_GET['id'];
    $sql = "select * from student where id=$id";
    require_once __DIR__.'/../../common/dbconnection.php';
    
    $con = new DBConnection();

    $result = $con->query($sql);

    $student = $result->fetch_object();

    if($student == null){
        exit("Student Not Found");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update details of <?= $student->name ?></title>
    <link href="../../assets/css/style.css" rel="stylesheet">

</head>
<body>
<h1>More details of <?= $student->name ?></h1>
    <form id="form" action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $student->id ?>">
        <table cellspacing="5">
            <tr valign="top"><td> <label for="">Name</label>:</td>
                <td><input type="text" name="name" id="nameField" value="<?= $student->name ?>"><br><span id="nameFieldMsg" class="errMsg"></span></td></tr>
            <tr valign="top"><td><label for="">City</label>:</td>
                <td><input type="text" name="city" id="cityField" value="<?= $student->city ?>">
                    <br><span id="cityFieldMsg" class="errMsg"></span></td></tr>
            <tr valign="top"><td><label for="">NIC</label>:</td>
                <td><input type="text" name="nic" id="nicField" value="<?= $student->nic ?>">
                    <br><span id="nicFieldMsg" class="errMsg"></span></td></tr>
            <tr><td colspan="2" style="text-align:right;"><button class="my-update-btn"  type="submit">Update</button></td></tr>
        </table>
    </form>
    <br>
    <br>
    <br>
    <a class="my-btn" href="./table.php">Show all student</a>

    
</body>
</html>