<?php
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $database = "dbhelbits";

    $conexao = new mysqli($hostname,$user,$password,$database);

    if(mysqli_connect_errno()) trigger_error(mysqli_connect_error());
    echo mysqli_connect_error();
?>