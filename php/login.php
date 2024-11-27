<?php

    include 'connect.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['user'];
        $password = $_POST['password'];

        if (filter_var($login, FILTER_VALIDATE_EMAIL)) {
            $query = "SELECT * FROM users WHERE email = '$username'";
        } else {
            $query = "SELECT * FROM users WHERE username = '$username'";
        }

        $result = mysqli_query($conn, $query);
        

    }
?>
