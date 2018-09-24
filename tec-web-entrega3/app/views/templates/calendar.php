<?php include_once("../../controllers/calendarController.php"); ?>
<?php include_once("../layouts/header.php"); ?>
<main>
    <div class="container-fluid">
        <div>
            <br>
            <p>
                <span style="color:#395143; font-size: 18px;">
                    <i class="far fa-hand-point-right"></i> Você está em: Calendário
                </p>
            </div>
            <hr>
            <div class="container">
              <div id='calendar'>

              </div>
            </div>

        </div> <!-- Fim container-fluid -->
    </main>
    <div>&emsp;</div>

    <?php include_once("../layouts/footer.php"); ?>
</body>
<script>
  $(document).ready(function() {

    $('#calendar').fullCalendar({
      defaultDate: '2018-03-12',
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
      {
          title: 'Conta luz Janeiro',
          start: '2018-02-10'
      },
      {
          title: 'Conta Água Janeiro',
          start: '2018-02-10'
      },
      {
          title: 'Conta Telefone Janeiro',
          start: '2018-02-05'
      },
      {
          title: 'Salário Janeiro',
          start: '2018-02-05'
      },
      {
          title: 'Freela site Tio João',
          start: '2018-02-15'
      },
      {
          title: 'Bônus atingiu meta',
          start: '2018-02-10'
      }
      ]
  });

});

</script>
</html>