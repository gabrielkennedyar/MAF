<?php
//Incluir o arquivo config.php no scritp atual
include("config.php");

//Verificar se uma ação foi solicitada
if(!empty($_GET['acao'])){
	
	//Guardando a ação solicitada
	$acao = $_GET['acao'];
	
	//Chaveando para qual regra de negocio vou atuar
	switch($acao){
		
		//Caso o acao = inserirLancamento
		case "inserir":
		    
			//Pegando as variaveis que estao vindo via POST e salvando em variaveis PHP
			$nome 			 = $_POST['nome'];
            $valor 			 = $_POST['valor'];
            $categoria 	 	 = $_POST['categoria'];
            $tipo   		 = $_POST['tipo'];
            $data            = $_POST['data'];
            $conta           = "1";
            $comentarios  	 = $_POST['coment'];
            
            //Montando o Query que sera executada no banco de dados
            $sql = "INSERT INTO lancamento (nome,valor,categoria,tipo,data_lancamento,comentario,conta_id)
            VALUES('$nome','$valor','$categoria','$tipo','$data','$comentarios','$conta')";	
        	
        	//Criando a variavel que vai acessar o metodo de query do Mysql
			//Atributo 1 = conexão
			//Atributo 2 = string de query
			
			if ($conn->query($sql) == TRUE) {
        	    //echo  "Lançamento incluído com sucesso!";
        	    header('Location: ./home.php');
        	    
            } else {
            	echo "Erro: " . $sql . "<br>" . $conn->error;
            }
			
		break;
		case 'selecionaItem' :
		    
		     $id  	 = $_POST['id_lancamento'];
            
            //Montando o Query que sera executada no banco de dados
            $sql = "SELECT nome, valor, tipo, data_lancamento, comentario FROM lancamento WHERE id=$id";	
        	
        	//Criando a variavel que vai acessar o metodo de query do Mysql
			//Atributo 1 = conexão
			//Atributo 2 = string de query
			$query = mysqli_query($conn,$sql);
			
			$return = array();
			
			while($dados = mysqli_fetch_array($query)){
			array_push($return, array('nome'=>$dados['nome'],'valor'=>$dados['valor'],'tipo'=>$dados['tipo'],
				'data'=>$dados['data_lancamento'],'comentario'=>$dados['comentario']));
		    }
		    
    		http_response_code(200);
    		echo json_encode(array('listagem'=>$return));
    		
		break;
		//Caso o acao = listar
		case 'listar':
		
		$registros = 5;
		$offset = 0;

		$sql_contagem = "SELECT * FROM dadosdolivro";
		$query_contagem = mysqli_query($conn, $sql_contagem);

		$total_registros = mysqli_num_rows($query_contagem);
		$total_paginas = ceil($total_registros/$registros);
			
		$sql = "SELECT * FROM dadosdolivro LIMIT ".$offset.", ".$registros;
		$query = mysqli_query($conn,$sql);
			
		$return = array();
			
		while($dados = mysqli_fetch_array($query)){
			array_push($return, array('id'=>$dados['id'],'nome'=>$dados['NomeDoLivro'],'capa'=>$dados['CapaDoLivro'],'ano'=>$dados['ano'],
				'editora'=>$dados['Editora'],'resumo'=>$dados['Resumo'],'status_'=>$dados['StatusDeLeitura']));
		}
		http_response_code(200);
		echo json_encode(array('listagem'=>$return));
		break;	
		//Caso a ação seja atualizar status de leitura
		case "edita_status":

            $id_livro     = $_POST["id_livro"];
            $status = $_POST["status_livro"];
        
            //Montando o Query que sera executado no bando de dados
            $sql = "UPDATE dadosdolivro SET StatusDeLeitura=$status WHERE id=$id_livro";

            $query = mysqli_query($conn,$sql);

            if($query){
                echo "OK";
            }else{
                echo "Erro ao atualizar status";
            }

        break;

		//Caso a ação seja deletar/excluir
		case 'deletar':

		$id_livro = $_POST["id_livro"];

		$sql = "DELETE FROM dadosdolivro WHERE id=$id_livro";

		$query = mysqli_query($conn,$sql);

		if($query){
			alert("Lançamento registrado com sucesso!");	
		}else{
			alert("Erro ao inserir na tabalea lancamento!");	
		}

		break;
		//Caso a acao solicitada não exista
		default:
			echo "Serviço não existe";
		break;
	}
	
//Se nenhuma ação é definida ele retorna o texto abaixo
}else{
	echo "Sem ação definida!";
}

?>