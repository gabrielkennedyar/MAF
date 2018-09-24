<?php include_once("../models/contatoModel.php"); ?>

<?

class ContatoController {

    public function listar() {
        $contato = new Contato(); // Instancia da classe daa model
        $contatos = $contato->listAll(); // Chamada da funçãao da model

        $_REQUEST['contato'] = $contato; // Requisição da página

        require_once 'views/templates/contato.php'; // Entrega pra view
    }
}