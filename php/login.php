<?php

// Chamando o arquivo config.php com o acesso ao banco de dados.
include_once('config.php');

// Variáveis de Login
$email = addslashes($_POST['email']);
$senha = addslashes($_POST['senha']);
$entrar = addslashes($_POST['entrar']);

// Login de usuário cadastrado pelo banco de dados
if($conexao == True){

    if(isset($entrar)){
        $verifica = $conexao -> query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'") or die ("erro ao selecionar coluna");

        $rows = $verifica -> num_rows;

        if($rows <= 0){
            header("Location: ../html/erro_login.html");
        } else {
            setcookie("email", $email);
            header("Location: ../html/aplicacao.html");

        };

    };
    
} else {
    echo "Erro ao tentar conexão com o banco de dados";
};


?>