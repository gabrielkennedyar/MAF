<?php 
include("config.php");


?>
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
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <!--<script src="https://code.jquery.com/jquery-3.3.1.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Controlador das ações do site-->
    <script src="js/acoes.js" type="text/javascript"></script>

</head>

<body> 
<?php include_once("header.html"); ?>
<main>
    <div class="container-fluid">
<div>
            <br>
            <p>
                <span style="color:#395143; font-size: 18px;">
                    <i class="far fa-hand-point-right"></i> Você está em: Listar Despesas
                </span>
            </p>
        </div>

        <hr>
<div class="container" id="resultadoLista">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Listagem de Despesas</div>
      <div class="card-body">
        <table>
            <tr>
                <td>Nome</td>
                <td>Valor</td>
                <td>Data Vencimento</td>
                <td></td>
              </tr>
            <?php 
                $query = sprintf(" SELECT `id`,`nome`, `valor`, `data_lancamento` FROM `lancamento` WHERE categoria='DESPESA'; ");
                $dados = mysqli_query($conn,$query); // O primeiro argumento tem que ser sempre o $conn, que vem do config.php
                $linha = mysqli_fetch_assoc($dados);
                // calcula quantos dados retornaram
                $total = mysqli_num_rows($dados);
                if($total > 0) {
                    
                    do{
                        echo '<tr> ';
                        echo '<td> ' . $linha['nome'] . '</td>';
                        echo '<td> ' . $linha['valor'] . '</td>';
                        echo '<td> ' . $linha['data_lancamento'] . '</td>';
                        echo '<td><button onClick="abreTelaEdicao('.$linha['id'].')">Editar</a></td>';
                        echo '</tr>';
                    }while($linha = mysqli_fetch_assoc($dados));
                }
                
            ?>
        </table>
        </ul>
      </div>
    </div>
  </div>

        

    </div> <!-- Fim container-fluid -->
</main>


<?php include_once("footer.html"); ?>

</body>

</html>