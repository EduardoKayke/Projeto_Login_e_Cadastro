<?php

// Chamando o arquivo config.php com o acesso ao banco de dados.
include_once("config.php");

$nome = addslashes($_POST['nome']);
$editora = addslashes($_POST['editora']);
$data_edicao = addslashes($_POST['data_edicao']);


//Monta o SQL para inserir os dados do formulário do MySQL

$sql = "INSERT INTO cadastroItens(nome, editora, data_edicao) VALUES ('$nome', '$editora', '$data_edicao')";


//Envia código SQL para o MySQL

$result = mysqli_query($conexao, $sql);


// Após cadastroItens
if($conexao == True){
    header("Location: ../index.html");
} else {
    echo "Erro ao tentar conexão com o banco de dados";
}