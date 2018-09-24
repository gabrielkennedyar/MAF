<?php include_once("../../controllers/contatoController.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Meu Assistente Financeiro - Contato</title>
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
    <link rel="stylesheet" href="/css/estilo.css">

        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <div class="col-sm-2">
                <a class="navbar-brand" href="index.php">
                    <img src="img/maf_logo2.png" alt="logo" style="max-width: 150px; max-height: 150px;">
                </a>
            </div>

            <div class="navbar-nav col-sm-7" style="background-color: #B6D422; margin-top: 15px; margin-bottom: -25px;">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="sobre.php">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato.php">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faq.php">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Registrar</a>
                    </li>

            </div>

            <div class="navbar-nav col-sm-3 justify-content-end" style="margin-top: -5px; margin-bottom: -20px; text-align: center;">
                <li class="nav-item">
                    <a class="nav-link" href="login.php">
                        <span>
                            <i class="fas fa-sign-in-alt"></i> <p>Login</p>
                        </span>
                    </a>
                </li>
            </div>
        </nav>
    <main>
        <div class="container-fluid">

            <div>
                <br>
                <p>
                    <span style="color:#395143; font-size: 18px;">
                        <i class="far fa-hand-point-right"></i> Contato!
                    </span>
                </p>
            </div>

            <hr>

            <div class="row" style="text-align: justify;">
                <div class="col-md-3">
                    &nbsp;
                </div>
                <div class="col-md-6">
                    <h3>Tem alguma dúvida, crítica, sugestão a fazer?</h3>
                    <p>Envie um e-mail para <em>contato@maf.com.br</em> que logo em breve o responderemos</p>
                </div>
                <div class="col-md-3">
                    &nbsp;
                </div>

            </div>

        </div> <!-- Fim container-fluid -->
    </main>


    <?php include_once("../layouts/footer.php"); ?>

</body>

</html>