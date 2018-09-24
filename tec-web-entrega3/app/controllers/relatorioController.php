<?php include_once("../models/relatorioModel.php"); ?>

<?

class RelatorioController {

    public function listar() {
        $relatorio = new Relatorio(); // Instancia da classe daa model
        $relatorios = $relatorio->listAll(); // Chamada da funçãao da model

        $_REQUEST['relatorio'] = $relatorios; // Requisição da página

        require_once 'views/templates/relatorio.php'; // Entrega pra view
    }
}