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
                    <li><a href="forum.php" class="link">Fórum</a></li>
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
            <p>Dgzin é o novo reforço da LOUD para a temporada de 2025, assumindo o papel de duelista principal da equipe verde. A expectativa está alta: será que essa parceria vai render bons resultados?</p>
        </div>
        <div class="news-card">
            <img src="../img/vinijr.jpg" alt="Notícia 2">
            <h3>Vini Jr sócio da LOUD!</h3>
            <p>Vini Jr., craque do Real Madrid, tornou-se sócio da LOUD, fortalecendo a conexão entre esportes e games.</p>           
        </div>
        <div class="news-card">
            <img src="../img/lesssad.jpg" alt="Notícia 3">
            <h3>Less e SaadHack saem da LOUD!</h3>
            <p>Less e SaadHack se despedem da LOUD, marcando o fim de suas jornadas na equipe e abrindo novos caminhos em suas carreiras.</p>
        </div>
        <div class="news-card">
            <img src="../img/vinny.jpg" alt="Notícia 4">
            <h3>Vinny novo IGL da loud valorant!</h3>
            <p>Vinny, ex-Red Canids, é o novo IGL da LOUD. Sua experiência promete liderar a equipe rumo a grandes conquistas.</p>
        </div>
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
