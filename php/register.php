<?php

include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['user'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conn = conexao();

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("E-mail inválido!");
    }

    // Verificação de existência de usuário já cadastrado no banco
    $sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "Usuário ou e-mail já cadastrado!";
    } else {
        $sql = "INSERT INTO users (username, name, email, password) VALUES ('$username', '$name', '$email', '$password')";

        if (mysqli_query($conn, $sql)) {
            echo "Registro realizado com sucesso!";
            header("Location: ../main/log-reg.php");
        } else {
            echo "Erro ao registrar: " . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}
