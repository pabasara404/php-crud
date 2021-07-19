<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Management System</title>
    <style>
        body{
            margin: 0;
        }
        iframe{
            width: 100%;
            height: 500px;
            border: none;
        }
        #topBar{
            box-sizing: border-box;
            height: 50px;
            padding: 10px 15px;
            background-color: #008080;
        }

        #topBar a {
            color: white;
            text-decoration: none;
            font-family: sans-serif;
            display: inline-block;
            font-size: 16px;
            padding: 6px 12px;

        }
        #topBar a:hover{
            background-color:#009080;
            
        }
    </style>
</head>
<body>
    <div id="topBar"><a target="subWindow" href="./modules/student/form.html">Add New Student</a>
    <a target="subWindow" href="./modules/batch/form.html">Add New Batch</a></div>
    <iframe name="subWindow" src=""  frameborder="0"></iframe>
</body>
</html>