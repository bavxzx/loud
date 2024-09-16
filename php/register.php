<?php

    include 'connect.php';

    if(isset($_POST['register'])){
        $username=$_POST['user'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password']
        $password=md5($password);

        $verifyUser = "SELECT users FROM username WHERE email='$email' OR username='$username'";
        $result = $conn->query($verifyUser);

        if($result->num_rows>0){
            echo "Email inserido ja existe.";
        }
        else{
            $insertQuery = "INSERT INTO users(username, name, email, password")
                VALUES('$username', '$name', '$email', '$password');

            if ($conn->query($insertQuery) === TRUE) {
                echo "Registro realizado com sucesso!";
            } else {
                echo "Erro: " . $conn->error;
            }   
        }
    }
?>