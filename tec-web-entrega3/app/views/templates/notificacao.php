<?php include_once("../../controllers/usuarioController.php"); ?>
<?php include_once("../layouts/header.php"); ?>
    <main>
        <div class="container-fluid">

            <div>
                <br>
                <p>
                    <span style="color:#395143; font-size: 18px;">
                        <i class="far fa-hand-point-right"></i> Notificações!
                    </span>
                </p>
            </div>

            <hr>

            <div class="row" style="text-align: center;">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="alert alert-danger" role="alert">
                        Ops! Não tem nenhuma notificação para você no momento. Volte mais tarde!
                    </div>
                </div>


            </div>
            <?php include_once("../layouts/footer.php"); ?>






        </div> <!-- Fim container-fluid -->
    </main>


    <?php include_once("footer.html"); ?>

</body>

</html>