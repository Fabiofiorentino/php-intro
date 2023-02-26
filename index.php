<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de inscrição</title>
</head>
<body>
    <p>FORMULARIO PARA INSCRÇÃO DE COMPETIDORES</p>
    <form action="script.php" method="post">
        <?php
            $mensagemDeSucesso = isset($_SESSION['Mensagem de sucesso']) ? $_SESSION['Mensagem de sucesso'] : '';
            if(!empty($mensagemDeSucesso)) {
                echo $mensagemDeSucesso;
            }
            $mensagemDeErro = isset($_SESSION['Mensagem de erro']) ? $_SESSION['Mensagem de erro'] : '';
            if(!empty($mensagemDeErro)) {
                echo $mensagemDeErro;
            }
        ?>
        <p>Seu nome: <input type="text" name="nome" /></p>
        <p>Sua idade: <input type="text" name="idade" /></p>
        <p><input type="submit" value="Enviar dados do competidor"/></p>
    </form>
    
</body>
</html>