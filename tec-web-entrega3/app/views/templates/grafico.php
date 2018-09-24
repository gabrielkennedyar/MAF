<?php include_once("../../controllers/graficoController.php"); ?>
<?php include_once("../layouts/header.php"); ?>
<main>
    <div class="container-fluid">
<div>
            <br>
            <p>
                <span style="color:#395143; font-size: 18px;">
                    <i class="far fa-hand-point-right"></i> Você está em: Gráfico
                </span>
            </p>
        </div>

        <hr>
<canvas id="myChart" style="max-height: 500px; max-width: 500px;">

</canvas>



    </div> <!-- Fim container-fluid -->
</main>


<?php include_once("../layouts/footer.php"); ?>

</body>

<script type="text/javascript">
    var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ["Janeiro", "Fevereiro", "Marco", "Abril", "Maio", "Junho", "Julho"],
        datasets: [{
            label: "Receitas do semestre",
            backgroundColor: 'rgb(57,81,67)',
            borderColor: 'rgb(182,212,34)',
            data: [0, 10, 5, 2, 20, 30, 25],
        }]
    },

    // Configuration options go here
    options: {}
});
</script>

</html>