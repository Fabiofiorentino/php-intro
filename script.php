<?php

session_start();

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)) 
{
    $_SESSION['Mensagem de erro'] = "O campo nome está vazio!";
    header('location: index.php');
    return;
}
else if (strlen($nome) < 3)
{
    $_SESSION['Mensagem de erro'] = "O nome é inválido.";
    header('location: index.php');
    return;
}
else if (strlen($nome) > 40)
{
    $_SESSION['Mensagem de erro'] = "O nome está muito extenso";
    header('location: index.php');
    return;
}
else if(!is_numeric($idade)) 
{
    $_SESSION['Mensagem de erro'] = "Informe um NUMERO para idade";
    header('location: index.php');
    return;
}
else 
{
    $_SESSION['Mensagem de sucesso'] = "$nome tem $idade anos";
    header('location: index.php');
    return;
}

var_dump($nome);
var_dump($idade);

?>