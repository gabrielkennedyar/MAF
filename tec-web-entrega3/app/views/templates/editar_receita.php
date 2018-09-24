<?php include_once("../../controllers/receitaController.php"); ?>
<?php include_once("../layouts/header.php"); ?>
<main>
    <div class="container-fluid">
<div>
            <br>
            <p>
                <span style="color:#395143; font-size: 18px;">
                    <i class="far fa-hand-point-right"></i> Você está em: Editar Receita
                </span>
            </p>
        </div>

        <hr>

<div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Editando a receita "X"</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Nome</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="nome">
              </div>
              <div class="col-md-6">
                <label for="exampleInputTipo">Fonte</label>
                <!-- <input class="form-control" id="exampleInputTipo" type="text" aria-describedby="tipoHelp" placeholder="Tipo"> -->
                <select class="form-control" id="exampleInputTipo" type="text" aria-describedby="tipoHelp" placeholder="Tipo">
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
                <input class="form-control" id="InputValor" type="text" aria-describedby="valorHelp" placeholder="R$">
              </div>
              <div class="col-md-6">
                <label for="InputdataVenc">Data de Entrada</label>
                <input class="form-control" id="InputdataVenc" type="date" aria-describedby="dataVencHelp">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputComment">Comentário</label>
            <input class="form-control" id="exampleInputComent" type="text" aria-describedby="CommentHelp" placeholder="Opcional">
          </div>
          <a class="btn btn-primary btn-block" href="home.php">Salvar Mudanças</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="home.php">Cancelar</a>
          <a class="d-block small mt-3" href="home.php">Excluir</a>
        </div>
      </div>
    </div>
  </div>


    </div> <!-- Fim container-fluid -->
</main>


<?php include_once("../layouts/footer.php"); ?>

</body>

</html>