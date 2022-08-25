<?php
    // Dados do SGBD MySQL para a conexão
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "projeto";

    $conexao = new MySQLi($servidor, $usuario, $senha, $banco);
    if ($conexao->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
?>