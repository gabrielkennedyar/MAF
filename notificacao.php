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
    <link rel="stylesheet" href="/css/estilo.css">

        <?php include_once("header.html"); ?>
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

            <?php

    include 'config.php';
        
    $sql = "SELECT * FROM lancamento WHERE categoria='DESPESA' and data_lancamento < now()";
	$registros = mysqli_query($conn,$sql);
	
	if($registros != null){
		
		$row = mysqli_fetch_assoc($registros);
		
		$total = mysqli_num_rows($registros);
		
		if($total > 0){
			
			do{
				echo (' <div class="row" style="text-align: center;">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                            <div class="alert alert-danger" role="alert">
                                A despesa ' .$row['nome']. ', no valor de ' .$row['valor']. ' está atrasada. Data ' .$row['data_lancamento']. '.
                            </div>
                        </div>
                

            </div>');
			}while($row = mysqli_fetch_assoc($registros));
			
		}else{
		    echo (' <div class="row" style="text-align: center;">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="alert alert-danger" role="alert">
                                    Ops! Não tem nenhuma notificação para você no momento. Volte mais tarde!
                                </div>
                            </div>
                

                    </div>');
		}
	}
	
	//(nome,valor,categoria,tipo,data_lancamento,comentario,conta_id)
    //VALUES('$nome','$valor','$categoria','$tipo','$data','$comentarios','$conta')";	
	
	//if ($conn->query($sql) === TRUE) {
	//    echo  "Usuário incluído com sucesso!";
	//    header('location:home.php');
    //} else {
    //	echo "Erro: " . $sql . "<br>" . $conn->error;
    //}

?>






        </div> <!-- Fim container-fluid -->
    </main>


    <?php include_once("footer.html"); ?>

</body>

</html>