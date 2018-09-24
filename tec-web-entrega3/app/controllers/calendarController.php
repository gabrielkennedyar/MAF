<?php include_once("../models/calendarModel.php"); ?>

<?

class CalendarController {

    public function listar() {
        $calendar = new Calendar(); // Instancia da classe daa model
        $calendars = $calendar->listAll(); // Chamada da funçãao da model

        $_REQUEST['calendar'] = $calendars; // Requisição da página

        require_once 'views/templates/calendar.php'; // Entrega pra view
    }
}