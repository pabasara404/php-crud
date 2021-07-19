<?php
    require_once __DIR__.'/../../model/Student.php';
?>
<html>
    <head>
        <title>All Students</title>
    </head>
    <link href="../../assets/css/style.css" rel="stylesheet">
    <body>
        <h1>All students</h1>
        <table border="1" cellspacing="0" cellpadding='5'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>NIC Number</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
               
                    $result = Student::getAll();
                    while($row = $result->fetch_object()){
                        echo '<tr>';
                            echo'<td>'.$row->id.'</td>';
                            echo'<td>'.$row->name.'</td>';
                            echo'<td>'.$row->city.'</td>';
                            echo'<td>'.$row->nic.'</td>';
                            echo'<td><a class="my-detail-btn" href="detail.php?id='.$row->id.'">More...</a></td>';
                            echo'<td><a class="my-update-btn" href="update-form.php?id='.$row->id.'">Update</a></td>';
                            echo'<td><a class="my-delete-btn" href="delete.php?id='.$row->id.'">Delete</a></td>';
                    }
                ?>
            </tbody>
        </table>
        <br>
        <br>
        <a class="my-btn" href="./form.html">Add new student</a>
    </body>
</html>