// JavaScript Document

$(document).ready(function(){

	//Enviar dados
	$("#btnLancar").on("click",function(event){
	    
	    $("#exampleInputName").removeClass("campoSelecionado");
        $("#InputValor").removeClass("campoSelecionado");
        $("#exampleInputTipo").removeClass("campoSelecionado");
        $("#InputdataVenc").removeClass("campoSelecionado");
		
		var nome_lancamento = $("#exampleInputName").val();
		var valor_lancamento = $("#InputValor").val();
		var categoria_lancamento = $("#categoria").val();
		var tipo_lancamento = $("#exampleInputTipo").val();
		var data_lancamento = $("#InputdataVenc").val();
		var conta_cliente = "1";
		var comentario = $("#exampleInputComent").val();
		
		if(nome_lancamento !== "" && valor_lancamento !== "" && tipo_lancamento !== "" && data_lancamento !== ""){
			enviar (nome_lancamento, valor_lancamento, categoria_lancamento, tipo_lancamento, data_lancamento, conta_cliente,comentario);
		}else{
			
			if(nome_lancamento === ""){ $("#exampleInputName").addClass("campoSelecionado"); }
			
			if(valor_lancamento === ""){ $("#InputValor").addClass("campoSelecionado"); }
			
			if(tipo_lancamento === ""){ $("#exampleInputTipo").addClass("campoSelecionado"); }

			if(data_lancamento === ""){ $("#InputdataVenc").addClass("campoSelecionado"); }

			alert("Você deixou campos obrigatórios sem preencher!");
		}

	});
	
	$("#btListar").on("click",function(event){

		
		$.ajax({
			dataType: 'json',
			url: 'service.php?acao=listar',
			success: function success(data) {			
				
				$('#carregar').css('display','none');
				$('#resultadoLista').empty();
				
				$.each(data.listagem, function (index, value) {

					//console.log(value.nome);
					$('#resultadoLista').append(itemLista(value.id,value.nome,value.capa,value.ano,value.editora,value.resumo,value.status_));

				});
				
			},
			error: function error(data){
				$('#carregar').css('display','none');
				alert('Erro ao processar a solicitação! Tente novamente.');
			}
		});
		
		
	});
});

function listagem() {

    $.ajax({
			dataType: 'json',
			url: 'service.php?acao=listar',
			success: function success(data) {			
				
				$('#carregar').css('display','none');
				$('#resultadoLista').empty();
				
				$.each(data.listagem, function (index, value) {

					//console.log(value.nome);
					$('#resultadoLista').append(itemLista(value.id,value.nome,value.capa,value.ano,value.editora,value.resumo,value.status_));

				});
				
			},
			error: function error(data){
				$('#carregar').css('display','none');
				alert('Erro ao processar a solicitação! Tente novamente.');
			}
		});

}

//Enviar dados por requisição assincrona
function enviar (nome_lancamento, valor_lancamento, categoria_lancamento, tipo_lancamento, data_lancamento, conta_cliente,comentario)
{
	//Método jQuery para requisições assincronas
	$.ajax({
	  //Encapsule via POST os dados e envie via HTTP
	  method: "POST",
	  //Use o script service.php como destinatário, passando por GET o serviço solicitado
	  url: "service.php?acao=inserir",
	  //Dados que serão enviados
	  data: { nome: nome_lancamento, valor: valor_lancamento, categoria: categoria_lancamento, tipo: tipo_lancamento, data: data_lancamento, conta: conta_cliente, coment: comentario }
	})
	  //Quando a excução acabar receba em MSG o evento de retorno
	  //.done(function( msg ) {
		
		//Checagem de status do serviço para retorno ao usuário
	//	if(msg === "ok"){
	//		alert("Lançamento registrado com sucesso!");	
	//	}else{
	//		alert("Erro ao registrar lançamento!");	
	//	}
		
//	  });	
	window.location.href = "home.php";
}

function itemLista(id,nome,capa,ano,editora,resumo,status_){
	
return `<tr>
                <td>${id}</td>
                <td>${nome}</td>
                <td><img src='${capa}' width='100'></td>
                <td align='center'>${ano}</td>
                <td>${editora}</td>
                <td>${resumo}</td>                
                <td align='center'>
	                <div class="progress">
					  <div class="progress-bar" role="progressbar" aria-valuenow="${status_}"
					  aria-valuemin="0" aria-valuemax="100" style="width:${status_}%">
					  ${status_}
					  </div>
					</div>
				</td>
                <td align='center'>
                    <button onClick='popUpStatus(${id},${status_})'>Mudar Status</button>
                    <button onClick='deletar(${id})'>Excluir</button>
                </td>
            </tr>`;

	//return "<tr><td>"+id+"</td><td>"+nome+"</td><td>"+capa+"</td><td>"+ano+"</td><td>"+editora+"</td><td>"+resumo+"</td><td>"+status_+"</td><td><a href='#' class='deletar' id='btDeletar"+id+"'>Deletar</a>&nbsp;|&nbsp;<a href='#' class='editar' id='editar_"+id+"'>Editar</a></td></tr>";
}

function abreTelaEdicao(id){
    	
    	$.ajax({
			dataType: 'json',
			url: 'service.php?acao=selecionaItem',
			success: function success(data) {
				
				$('#resultadoLista').empty();
				
				$.each(data.listagem, function (index, value) {

					//console.log(value.nome);
					$('#resultadoLista').append(itemParaEditar(id, value.nome,value.valor,value.tipo,value.data,value.comentario));

				});
				
			},
			error: function error(data){
				alert('Erro ao processar a solicitação! Tente novamente.');
			}
		});
}

function itemParaEditar(id, nome, valor, tipo, data, comentario){
    return `<div class="card card-register mx-auto mt-5">
              <div class="card-header">Editando a receita "X"</div>
              <div class="card-body">
                <form>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-6">
                        <label for="exampleInputName">Nome</label>
                        <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="${nome}" value="${nome}">
                      </div>
                      <div class="col-md-6">
                        <label for="exampleInputTipo">Fonte</label>
                        <!-- <input class="form-control" id="exampleInputTipo" type="text" aria-describedby="tipoHelp" placeholder="Tipo"> -->
                        <select class="form-control" id="exampleInputTipo" type="text" aria-describedby="tipoHelp" placeholder="Tipo" selected="${tipo}">
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
                        <input class="form-control" id="InputValor" type="text" aria-describedby="valorHelp" placeholder="R$ ${valor}" value="${valor}">
                      </div>
                      <div class="col-md-6">
                        <label for="InputdataVenc">Data de Entrada</label>
                        <input class="form-control" id="InputdataVenc" type="date" aria-describedby="dataVencHelp" value="${data}">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputComment">Comentário</label>
                    <input class="form-control" id="exampleInputComent" type="text" aria-describedby="CommentHelp" placeholder="Opcional" value="${comentario}">
                  </div>          
                  <a class="btn btn-primary btn-block" href="home.php">Salvar Mudanças</a>
                </form>
                <div class="text-center">
                  <a class="d-block small mt-3" href="home.php">Cancelar</a>
                  <a class="d-block small mt-3" href="home.php">Excluir</a>
                </div>
              </div>
            </div>`;
}

function deletar(id){

    //exibeCarregando();

    if (confirm("Você deseja realmente excluir esse registro?")) {
        $.ajax({
            method: "POST",
            url: "service.php?acao=deletar",
            data: { id_livro: id }
        })
        .done(function( msg ) {
            console.log(msg);
            if(msg == "OK"){
                alert("Deletado com sucesso!");
            }else{
                alert("Erro ao processar solicitação!");
            }
            listagem();
            //escondeCarregando();
        });
    }
    else {
        //escondeCarregando();
    }

}