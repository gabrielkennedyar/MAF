<? ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Meu Assistente Financeiro</title>
    <!-- Bootstrap Core -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/estilo.css">

    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/regular.css" integrity="sha384-A/oR8MwZKeyJS+Y0tLZ16QIyje/AmPduwrvjeH6NLiLsp4cdE4uRJl8zobWXBm4u"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/brands.css" integrity="sha384-IiIL1/ODJBRTrDTFk/pW8j0DUI5/z9m1KYsTm/RjZTNV8RHLGZXkUDwgRRbbQ+Jh"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P"
        crossorigin="anonymous">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>

<body> 
<?php include_once("header.html"); ?>
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
        <form method="POST" action="editar_lancamento.php">
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


<?php include_once("footer.html"); ?>

</body>

</html>