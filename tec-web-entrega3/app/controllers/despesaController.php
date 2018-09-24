<?php include_once("../models/despesaModel.php"); ?>

<?

class DespesaController {

    public function listar() {
        $despesa = new Despesaa(); // Instancia da classe daa model
        $despesas = $despesa->listAll(); // Chamada da funçãao da model

        $_REQUEST['despesa'] = $despesas; // Requisição da página

        require_once 'views/templates/despesa.php'; // Entrega pra view
    }
}