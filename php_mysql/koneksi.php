<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";
    
    $connection = new mysqli($servername, $username, $password, $dbname);

    if($connection->connect_error){
        die("connection failed: " . $connection->connect_error);
    }
    
    