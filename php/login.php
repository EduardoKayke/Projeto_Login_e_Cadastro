<?php

// Chamando o arquivo config.php com o acesso ao banco de dados.
include_once('config.php');

// Variáveis de Login
$email = addslashes($_POST['email']);
$senha = addslashes($_POST['senha']);

// Busca no Banco de dados
$buscar_email = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email'");
$buscar_senha = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$senha'");

if($conexao == True){
    // Login de usuário exemplo, do admin e do usuário cadastrado pelo banco
    if($email === 'adm@gmail.com' and $senha === '123456'){
        header("Location: ../html/aplicacao.html");
    } elseif ($email === 'usuario@gmail.com' and $senha === '123456'){
        header("Location: ../html/aplicacao.html");
    } elseif ($email and $senha === $buscar_email and $buscar_senha){
        header("Location: ../html/aplicacao.html");
    } else {
        echo "Senha ou Usuário incorreto.";
    }
} else {
    echo "Erro ao tentar conexão com o banco de dados";
}


?>