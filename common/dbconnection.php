<?php

// return new mysqli('localhost', 'root', '1234', 'web');
class DBConnection extends mysqli{
    //__construct()-PHP will automatically call this function when you create an object from a class(create constructor automatically)
    function __construct(){
       parent::__construct('localhost', 'root', '1234', 'web');
    }
    
}

?>