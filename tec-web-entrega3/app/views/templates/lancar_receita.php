<?php include_once("../../controllers/receitaController.php"); ?>
<?php include_once("../layouts/header.php"); ?>
<main>
    <div class="container-fluid">
<div>
            <br>
            <p>
                <span style="color:#395143; font-size: 18px;">
                    <i class="far fa-hand-point-right"></i> Você está em: Lançar Receita
                </span>
            </p>
        </div>

        <hr>



        <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Lançar uma receita</div>
      <div class="card-body">
        <form method="POST" action="insere_lancamento.php">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Nome</label>
                <input class="form-control" id="exampleInputName" name="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="nome">
              </div>
              <div class="col-md-6">
                <label for="exampleInputTipo">Fonte</label>
                <!-- <input class="form-control" id="exampleInputTipo" type="text" aria-describedby="tipoHelp" placeholder="Tipo"> -->
                <select class="form-control" id="exampleInputTipo" name="exampleInputTipo" type="text" aria-describedby="tipoHelp" placeholder="Tipo">
                  <option value="naoinformado">Não Informado</option>
                  <option value="salario">Salário</option>
                  <option value="mesada">Mesada/Pensão</option>
                  <option value="patrocinio">Patrocinio</option>
                  <option value="freelance">Freelance</option>
                  <option value="poupanca">Poupança</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="InputValor">Valor</label>
                <input class="form-control" id="InputValor" name="InputValor" type="text" aria-describedby="valorHelp" placeholder="R$">
              </div>
              <div class="col-md-6">
                <label for="InputdataVenc">Data de Entrada</label>
                <input class="form-control" id="InputdataVenc" name="InputdataVenc" type="date" aria-describedby="dataVencHelp">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputComment">Comentário</label>
            <input class="form-control" id="exampleInputComent" name="exampleInputComent" type="text" aria-describedby="CommentHelp" placeholder="Opcional">
          </div>
          <input hidden value="RECEITA" name="categoria"></input>
          <input class="btn btn-primary btn-block" type="submit" value="Lançar"></input>
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