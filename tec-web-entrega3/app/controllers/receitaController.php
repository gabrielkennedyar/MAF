<?php include_once("../models/receitaModel.php"); ?>

<?

class ReceitaController {

    public function listar() {
        $receita = new Receita(); // Instancia da classe daa model
        $receitas = $receita->listAll(); // Chamada da funçãao da model

        $_REQUEST['receita'] = $receitas; // Requisição da página

        require_once 'views/templates/receita.php'; // Entrega pra view
    }
}