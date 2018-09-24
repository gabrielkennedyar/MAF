<?php include_once("../models/faqModel.php"); ?>

<?

class FaqController {

    public function listar() {
        $faq = new Faq(); // Instancia da classe daa model
        $faqs = $faq->listAll(); // Chamada da funçãao da model

        $_REQUEST['faq'] = $faqs; // Requisição da página

        require_once 'views/templates/faq.php'; // Entrega pra view
    }
}