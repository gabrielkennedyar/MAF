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
                        <i class="far fa-hand-point-right"></i> Você está em: Editar Perfil
                    </span>
                </p>
            </div>

            <hr>
            <div class="container">
                <div class="card card-register mx-auto mt-5">
                    <div class="card-header">Editando Perfil</div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="exampleInputName">Nome</label>
                                        <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Primeiro nome">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputLastName">Sobrenome</label>
                                        <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Sobrenome">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="InputCPF">CPF</label>
                                        <input class="form-control" id="InputCPF" type="text" aria-describedby="cpfHelp" pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}" placeholder="000.000.000-00" disabled> 
                                    </div>
                                    <div class="col-md-6">
                                        <label for="InputdataNasc">Data de Nascimento</label>
                                        <input class="form-control" id="InputdataNasc" type="date" aria-describedby="dataNascHelp">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="exampleInputPassword1">Nova Senha</label>
                                        <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Senha">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleConfirmPassword">Confirmar senha</label>
                                        <input class="form-control" id="exampleConfirmPassword" type="password" placeholder="Confirmar senha">
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-primary btn-block" href="index.html">Salvar Mudanças</a>
                        </form>
                        <div class="text-center">
                            <a class="d-block small mt-3" href="index.html">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- Fim container-fluid -->
    </main>


    <?php include_once("footer.html"); ?>

</body>

</html>