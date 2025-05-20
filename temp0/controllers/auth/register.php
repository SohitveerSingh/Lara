<?php

if($_SERVER["REQUEST_METHOD"]== "POST"){

include ("./controllers/conn/connection.php");
$username = $_POST["username"];
$password = $_POST["password"];


    $inserting_user = $connection->prepare("INSERT INTO userdata ( username, password ) VALUES (?, ?");
    $inserting_user->bind_param('ss',$id, $username, $password);
    $inserting_user->execute();
    $inserting_user->close();
}
?>