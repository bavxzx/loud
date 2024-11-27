<?php 
    function conexao() {
    $nomebd = "contas";
    $usuario = "root";
    $senha = "";
    $local = "localhost";

    return mysqli_connect($local, $usuario, $senha, $nomebd);
}
?>