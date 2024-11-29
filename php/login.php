<?php

session_start();

include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['user'];
    $password = $_POST['password'];
    $conn = conexao();

    if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
        $sql = "SELECT * FROM users WHERE email = '$username'";
    } else {
        $sql = "SELECT * FROM users WHERE username = '$username'";
    }
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) < 1) {
        echo "Usuário não encontrado.";
    } else {
        $user = mysqli_fetch_assoc($result);

        if ($password === $user['password']) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];

            header("Location: ../main/index.php");
            exit;
        } else {
            echo "Senha incorreta.";
        }
    }
}
