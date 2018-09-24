<?php include_once("../models/usuarioModel.php"); ?>

<?

class UsuarioController {

    public function listar() {
        $usuario = new Usuario(); // Instancia da classe daa model
        $usuarios = $usuario->listAll(); // Chamada da funçãao da model

        $_REQUEST['usuario'] = $usuarios; // Requisição da página

        require_once 'views/templates/usuario.php'; // Entrega pra view
    }
