<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: log-reg.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOUD</title>
    <link rel="stylesheet" href="../style/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
    
<body>
    <div class="wrapper">
        <nav class="nav">
            <div class="nav-logo">
                <img src="../img/loud-ff-logo-7AC3C6CBAE-seeklogo.com.png" alt="LOUD" width="50px">
            </div>
            <div class="nav-menu" id="navMenu">
                <ul>
                    <li><a href="index.php" class="link">Inicio</a></li>
                    <li><a href="fórum.php" class="link active">Hydra Collection</a></li>
                    <li><a href="contato.php" class="link">Contato</a></li>
                </ul>
            </div>
            <div class="nav-button">
                <?php
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                    echo '<form method ="POST" action="../php/logout.php">
                            <a href="logout.php"><button class="btn white-btn" id="logoutBtn">Logout</button></a>
                        </form>';
                } else {
                    echo '<a href="log-reg.php"><button class="btn white-btn" id="loginBtn">Entrar/Registrar</button></a>';
                }
                ?>
            </div>
            <div class="nav-menu-btn">
                <i class="bx bx-menu" onclick="myMenuFunction()"></i>
            </div>
        </nav>

        <script>
            function myMenuFunction() {
                var i = document.getElementById("navMenu");
                if (i.className === "nav-menu") {
                    i.className += " responsive";
                } else {
                    i.className = "nav-menu";
                }
            }
        </script>
</body>
</html>