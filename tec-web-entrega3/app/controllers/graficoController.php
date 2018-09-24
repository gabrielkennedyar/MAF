<?php include_once("../models/graficoModel.php"); ?>

<?

class GraficoController {

    public function listar() {
        $grafico = new Grafico(); // Instancia da classe daa model
        $graficos = $grafico->listAll(); // Chamada da funçãao da model

        $_REQUEST['grafico'] = $graficos; // Requisição da página

        require_once 'views/templates/grafico.php'; // Entrega pra view
    }
}