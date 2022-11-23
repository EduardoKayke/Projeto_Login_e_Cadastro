<?php

// Chamando o arquivo config.php com o acesso ao banco de dados.
include_once("config.php");

$nome = addslashes($_POST['nome']);
$editora = addslashes($_POST['editora']);
$data_edicao = addslashes($_POST['data_edicao']);


$result = mysqli_query($conexao, "INSERT INTO itens(nome, editora, data_edicao) VALUES ('$nome', '$editora','$data_edicao')");

// Após cadastroItens
if($conexao == True){
    header("Location: ../index.html");
} else {
    echo "Erro ao tentar conexão com o banco de dados";
}