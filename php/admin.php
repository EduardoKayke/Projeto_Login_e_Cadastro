<?php

// Chamando o arquivo config.php com o acesso ao banco de dados.
include_once('config.php');

// Variáveis de Login
$email = addslashes($_POST['email']);
$senha = addslashes($_POST['senha']);

// Login exemplo do admin e do usuário
if ($email === 'adm@gmail.com' and $senha === '123456'){
    header("Location: ../html/aplicacao.html");

} elseif ($email === 'usuario@gmail.com' and $senha === '123456'){
    header("Location: ../html/aplicacao.html");

};

?>