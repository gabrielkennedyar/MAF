<?php

    include 'config.php';

    $nome 			 = $_POST['exampleInputName'];
    $valor 			 = $_POST['InputValor'];
    $categoria 	 	 = $_POST['categoria'];
    $tipo   		 = $_POST['exampleInputTipo'];
    $data            = $_POST['InputdataVenc'];
    $conta           = "1";
    $comentarios  	 = $_POST['exampleInputComent'];
    $id              = "1";
    
    $sql = "UPDATE lancamento SET nome = $nome, valor = $valor, categoria = $categoria,tipo = $tipo,data_lancamento = $data,comentario = $comentarios,conta_id = $conta WHERE id = $id";	
	
	if ($conn->query($sql) == TRUE) {
	    echo  "Usuário incluído com sucesso!";
	    header('location:home.php');
    } else {
    	echo "Erro: " . $sql . "<br>" . $conn->error;
    }

?>