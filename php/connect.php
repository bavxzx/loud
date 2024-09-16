<?php
    $host = "localhost";
    $user = "root";
    $password = ""; 
    $db = "Contas";

    $con = new mysql($host, $user, $password);
    if($conn->connect_error){
        echo "Falha para conectar no banco".$conn->connect_error;
    }
?>