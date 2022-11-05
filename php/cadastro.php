<?php

// Chamando o arquivo config.php com o acesso ao banco de dados.
include_once("config.php");

$nome = addslashes($_POST['nome']);
$telefone = addslashes($_POST['telefone']);
$data_nascimento = addslashes($_POST['data_nascimento']);
$endereco = addslashes($_POST['endereco']);
$cidade = addslashes($_POST['cidade']);
$estado = addslashes($_POST['estado']);
$sexo = addslashes($_POST['genero']);
$email = addslashes($_POST['email']);
$senha = addslashes($_POST['senha']);

$result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, sexo, data_nascimento, cidade, estado, endereco, senha) VALUES ('$nome', '$email', '$telefone', '$sexo', '$data_nascimento', '$cidade', '$estado', '$endereco', '$senha')");

// Após cadastro
if($conexao == True){
    header("Location: ../index.html");
} else {
    echo "Erro ao tentar conexão com o banco de dados";
}