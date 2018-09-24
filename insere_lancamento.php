<?php

    include 'config.php';

    $nome 			 = $_POST['exampleInputName'];
    $valor 			 = $_POST['InputValor'];
    $categoria 	 	 = $_POST['categoria'];
    $tipo   		 = $_POST['exampleInputTipo'];
    $data            = $_POST['InputdataVenc'];
    $conta           = "1";
    $comentarios  	 = $_POST['exampleInputComent'];
    
    $sql = "INSERT INTO lancamento (nome,valor,categoria,tipo,data_lancamento,comentario,conta_id)
    VALUES('$nome','$valor','$categoria','$tipo','$data','$comentarios','$conta')";	
	
	if ($conn->query($sql) == TRUE) {
	    //echo  "Lançamento incluído com sucesso!";
	    header('Location: ./home.php');
	    
    } else {
    	echo "Erro: " . $sql . "<br>" . $conn->error;
    }

?>