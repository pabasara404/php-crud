<?php
   require_once __DIR__.'/../../common/dbconnection.php';
    $id = $_GET['id'];
    $sql = "select * from student where id=$id";
    $con = new DBConnection();
    
    $result = $con->query($sql);

    $student = $result->fetch_object();

    if($student == null){
        exit("Student Not Found");
    }
?>

<html>
    <head>
        <title>More details of <?= $student->name ?></title>
        <link href="../../assets/css/style.css" rel="stylesheet">

    </head>
    <body>
        <h1>More details of <?= $student->name ?></h1>
        <table border="1" cellspacing="0" cellpadding="5">
            <tr>
                <td>ID</td>
                <td><?= $student->id ?></td>
            </tr>
            <tr>
            <td>Name</td>
            <td><?= $student->name ?></td>
            </tr>
            <tr>
            <td>City</td>
            <td><?= $student->city ?></td>
            </tr>
            <tr>
            <td>NIC</td>
            <td><?= $student->nic ?></td>
            </tr>
        </table>
<p></p>
        <a class="my-btn" href="./table.php">Show all student</a>
        <a class="my-delete-btn" href="./delete.php?id=<?= $student->id ?>">Delete</a>
        <a class="my-update-btn" href="update-form.php?id=<?= $student->id ?>">Update</a>
    </body>
</html>