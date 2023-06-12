<?php

    $database= new mysqli("localhost","root","","Doc");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>