<?php

// Variáveis para o acesso ao banco de dados.
$dbHost = '127.0.0.1';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'appitens';

// Conexão PHP para MySQL
$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Teste de conexão
if($conexao -> connect_errno){
    echo "Erro ao tentar conexão com o banco de dados";
} else {
    header("Location: ../index.html");
}

?>