<?php include_once("../../controllers/despesaController.php"); ?>
<?php include_once("../layouts/header.php"); ?>
<main>
    <div class="container-fluid">
<div>
            <br>
            <p>
                <span style="color:#395143; font-size: 18px;">
                    <i class="far fa-hand-point-right"></i> Você está em: Lançar Despesa
                </span>
            </p>
        </div>

        <hr>


        <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Lançar uma despesa</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Nome</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="nome">
              </div>
              <div class="col-md-6">
                <label for="exampleInputTipo">Tipo</label>
                <!-- <input class="form-control" id="exampleInputTipo" type="text" aria-describedby="tipoHelp" placeholder="Tipo"> -->
                <select class="form-control" id="exampleInputTipo" type="text" aria-describedby="tipoHelp" placeholder="Tipo">
                  <option value="naoinformado">Não Informado</option>
                  <option value="agua">Água</option>
                  <option value="luz">Luz</option>
                  <option value="gas">Gás</option>
                  <option value="alimentacao">Alimentação</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="InputValor">Valor</label>
                <input class="form-control" id="InputValor" type="text" aria-describedby="valorHelp" placeholder="R$">
              </div>
              <div class="col-md-6">
                <label for="InputdataVenc">Data de Vencimento</label>
                <input class="form-control" id="InputdataVenc" type="date" aria-describedby="dataVencHelp">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputComment">Comentário</label>
            <input class="form-control" id="exampleInputComent" type="text" aria-describedby="CommentHelp" placeholder="Opcional">
            <label for="exampleInputTipo">Status</label>
                <!-- <input class="form-control" id="exampleInputTipo" type="text" aria-describedby="tipoHelp" placeholder="Tipo"> -->
                <select class="form-control" id="exampleInputTipo" type="text" aria-describedby="tipoHelp" placeholder="Tipo">
                  <option value="naoinformado">Não Informado</option>
                  <option value="pago">Pago</option>
                  <option value="naopago">Não pago</option>
                  <option value="atrasado">Pagamento atrasado</option>
                </select>
          </div>
          <a class="btn btn-primary btn-block" href="home.php">Lançar</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="home.php">Cancelar</a>
        </div>
      </div>
    </div>
  </div>

    </div> <!-- Fim container-fluid -->
</main>


<?php include_once("../layouts/footer.php"); ?>

</body>

</html>