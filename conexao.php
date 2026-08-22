<?php

$conexao = new mysqli("localhost", "root", "", "claro");

if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados.");
}

$conexao->set_charset("utf8");
?>