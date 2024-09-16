<?php

    include 'connect.php';

    if(isset($_POST['login'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $password=md5($password);

        $sql ="SELECT users WHERE username = '$username' and password='$password'";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            session_start();
            $row=$result->fetch_assoc();
            $_SESSION['email']=$row['email'];
            header("location: index.html");
            exit();
        }else{
            echo "Usuario ou senha incorretos."
        }

    }
?>
