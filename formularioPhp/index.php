<?php

    session_start()

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de inscrição</title>
</head>
<body>
    <h2>Formulário para inscrição de competidores</h2>
    <form action='script.php' method='post'>
        <?php
            $messagemDeErro = isset($_SESSION['erro-nome']) ? $_SESSION['erro-nome'] : '';
            if(!empty($messagemDeErro)){
                echo $messagemDeErro;
            }
            $messagemDeSucesso = isset($_SESSION['sucesso']) ? $_SESSION['sucesso'] : '';
            if(!empty($messagemDeSucesso)){
                echo $messagemDeSucesso;
            }
        ?>
        <p>Seu nome: <input type='text' name='nome'></p>
        <p>Sua idade: <input type='text' name='idade'></p>
        <p><input type='submit' value='Inscrever'></p>
</body>
</html>