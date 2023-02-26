<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)) 
{
    echo "O campo nome está vazio!";
    return;
}

if (strlen($nome) < 3)
{
    echo "nome invalido!";
    return;
}

if (strlen($nome) > 40)
{
    echo "nome muito extenso.";
    return;
}

if(!is_numeric($idade)) 
{
    echo "Informe um NUMERO para idade.";
    return;
}

var_dump($nome);
var_dump($idade);

?>