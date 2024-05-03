<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuario</title>
</head>
<body>
    <h1>Ola Mundo</h1>
    <form action="" name="cadUsuario" id="cadUsuario" method="post">
    <label>login: </label><input type="text" name="login" id="login"><br/>
    <label>Senha: </label><input type="password" name="senha1" id="senha1"><br/>
    <label>Confirmação da Senha: </label><input type="password" name="senha2" id="senha2"><br/>
    <label>Tipo de Permissão: </label>
    <select name="permissao" id="permissao">
        <option value="0"></option>
        <option value="A">Administrador</option>
        <option value="C">Comum</option>
    </select><br/><br/>
    <input type="submit" name="btnSalvar" id="btnSalvar">
    </form>
</body>
</html>

<?php

    //Verfica se o botão submit foi acionado 
    if(isset($_POST['btnSalvar'])){

        //Importa o UsuarioController.php
        require_once '../controller/UsuarioController.php';

        //Chama uma função PHP que permite informar a classe e o Método que será acionado
        call_user_func(array('UsuarioController','salvar'));
    }
?>