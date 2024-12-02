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
                    <li><a href="index.php" class="link active">Inicio</a></li>
                    <li><a href="fórum.php" class="link">Hydra Collection</a></li>
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
        <div class="news-section">
    <div class="banner">
        <img src="../img/banner.jpg" alt="Banner de Notícias">
        <div class="banner-text">
            <h2>Últimas Notícias</h2>
            <p>Fique por dentro das novidades mais recentes!</p>
        </div>
    </div>
    <div class="news-container">
        <div class="news-card">
            <img src="../img/dgzin.jpg" alt="Notícia 1">
            <h3>Dgzin na LOUD 2025.</h3>
            <p>Descrição curta da notícia 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="read-more">Leia mais</a>
        </div>
        <div class="news-card">
            <img src="../img/vinijr.jpg" alt="Notícia 2">
            <h3>Vini Jr sócio da LOUD!</h3>
            <p>Descrição curta da notícia 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="read-more">Leia mais</a>
        </div>
        <div class="news-card">
            <img src="../img/lesssad.jpg" alt="Notícia 3">
            <h3>Título da Notícia 3</h3>
            <p>Descrição curta da notícia 3. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="read-more">Leia mais</a>
        </div>
        <div class="news-card">
            <img src="../img/vinny.jpg" alt="Notícia 4">
            <h3>Dgzin novo IGL da loud valorant!</h3>
            <p>Descrição curta da notícia 4. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="read-more">Leia mais</a>
        </div>
        <!-- Adicione mais cards conforme necessário -->
    </div>
</div>
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
