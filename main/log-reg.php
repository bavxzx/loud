<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                    <li><a href="forum.php" class="link">Fórum</a></li>
                    <li><a href="contato.php" class="link">Contato</a></li>
                </ul>
            </div>
            <div class="nav-button">
                <ul>
                    <button class="btn white-btn" id="loginBtn" onclick="login()">Entrar</button>
                    <button class="btn" id="registerBtn" onclick="register()">Registro</button>
                </ul>
            </div>
            <div class="nav-menu-btn">
                <i class="bx bx-menu" onclick="myMenuFunction()"></i>
            </div>
        </nav>

        <!-- Registro/Login -->
        <div class="form-box">

            <!-- Login -->
            <div class="login-container" id="login">
                <div class="top">
                    <span>Não tem uma conta?ㅤ<a href="#" onclick="register()">Registre-se</a></span>
                    <header>Entrar</header>
                </div>
                <form method="post" action="../php/login.php">
                    <div class="input-box">
                        <input type="text" class="input-field" name="user" placeholder="Usuario" required>
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" class="input-field" name="password" placeholder="Senha"
                            id="login-password" required>
                        <i class="bx bx-lock-alt"></i>
                        <i class='bx bx-hide' id="login-eye"
                            onclick="togglePassword('login-password', 'login-eye')"></i>
                    </div>

                    <div class="input-box">
                        <button type="submit" class="submit">Login</button>
                    </div>
                </form>
            </div>

            <!-- Registro -->
            <div class="register-container" id="register">
                <div class="top">
                    <span>Já tem uma conta?ㅤ<a href="#" onclick="login()">Entrar</a></span>
                    <header>Registre-se</header>
                </div>

                <form method="post" name="asd" action="../php/register.php">
                    <div class="two-forms">
                        <div class="input-box">
                            <input type="text" name="user" class="input-field" placeholder="Usuario" required>
                            <i class="bx bx-user"></i>
                        </div>

                        <div class="input-box">
                            <input type="text" name="name" class="input-field" placeholder="Nome" required>
                            <i class="bx bx-user"></i>
                        </div>
                    </div>

                    <div class="input-box">
                        <input type="text" name="email" class="input-field" placeholder="Email" required>
                        <i class="bx bx-envelope"></i>
                    </div>

                    <div class="input-box">
                        <input type="password" name="password" class="input-field" placeholder="Senha"
                            id="register-password" required>
                        <i class="bx bx-lock-alt"></i>
                        <i class='bx bx-hide' id="register-eye"
                            onclick="togglePassword('register-password', 'register-eye')"></i>
                    </div>

                    <div class="input-box">
                        <button type="submit" class="submit">Registro</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        var a = document.getElementById("loginBtn");
        var b = document.getElementById("registerBtn");
        var x = document.getElementById("login");
        var y = document.getElementById("register");

        function login() {
            x.style.left = "4px";
            y.style.right = "-520px";
            a.className += " white-btn";
            b.className = "btn";
            x.style.opacity = 1;
            y.style.opacity = 0;
        }

        function register() {
            x.style.left = "-510px";
            y.style.right = "5px";
            a.className = "btn";
            b.className += " white-btn";
            x.style.opacity = 0;
            y.style.opacity = 1;
        }
    </script>

    <script>
        function togglePassword(passwordFieldId, eyeIconId) {
            var passwordField = document.getElementById(passwordFieldId);
            var eyeIcon = document.getElementById(eyeIconId);

            if (passwordField.type === "password") {
                passwordField.type = "text";
                eyeIcon.classList.remove('bx-hide');
                eyeIcon.classList.add('bx-show');
            } else {
                passwordField.type = "password";
                eyeIcon.classList.remove('bx-show');
                eyeIcon.classList.add('bx-hide');
            }
        }
    </script>

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