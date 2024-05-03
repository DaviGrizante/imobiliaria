<?php

    require_once '../model/Usuario.php';

    class UsuarioController{

    /*
        Salvar o usuario submetido pelo formulario
    */

    public static function salvar(){
        
        //cria um objeto do tipo Usuario
        $usuario = new Usuario;

        //armazena as informações do $_POST via set
        $usuario->setLogin($_POST['login']);
        $usuario->setSenha($_POST['senha1']);
        $usuario->setPermissao($_POST['permissao']);

        $usuario->save();
    }

    public function listar() {

        //cria um objetom do tipo Usuario
        $usuario = new Usuario;
        //chama o método listAll()
        return $usuario->listAll();
    }

    }

?>