<?php

include ("koneksi.php");
$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Fania', 'Rahmadina', 'fanirahmadina12@gmail.com')";

    if($connection->query($sql) === TRUE){
        echo "New record created successfully";
    }else{
        echo "Error: " . $sql . "<br>" . $connection->server;
    }