<?php

    include 'config.php';
        
    $sql = "SELECT 'nome','valor','categoria','data_lancamento' FROM lancamento WHERE categoria='DESPESA' and data_lancamento < now()";
	$registros = mysqli_query($conn,$cmd);
	
	if($registros != null){
		
		$row = mysqli_fetch_assoc($registros);
		
		$total = mysqli_num_rows($registros);
		
		if($total > 0){
			
			do{
				echo (' <div class="row" style="text-align: center;">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                            <div class="alert alert-danger" role="alert">
                                Ops! Não tem nenhuma notificação para você no momento. Volte mais tarde!
                            </div>
                        </div>
                

            </div>)';
			}while($row = mysqli_fetch_assoc($registros));
			
		}else{
		    echo (' <div class="row" style="text-align: center;">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="alert alert-danger" role="alert">
                                    Ops! Não tem nenhuma notificação para você no momento. Volte mais tarde!
                                </div>
                            </div>
                

                    </div>)';
		}
	}
	
	(nome,valor,categoria,tipo,data_lancamento,comentario,conta_id)
    VALUES('$nome','$valor','$categoria','$tipo','$data','$comentarios','$conta')";	
	
	if ($conn->query($sql) === TRUE) {
	    echo  "Usuário incluído com sucesso!";
	    header('location:home.php');
    } else {
    	echo "Erro: " . $sql . "<br>" . $conn->error;
    }

?>

function CriarAlert(){
	
}