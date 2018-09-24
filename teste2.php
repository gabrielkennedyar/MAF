<?php
// Tem que ter no início de todas as páginas que vão ter alguma conexão com o banco de dados
include("config.php");

// $teste = " SELECT * FROM cliente; ";
// $teste_confirmado = mysqli_query($conn,$teste); // O primeiro argumento tem que ser sempre o $conn, que vem do config.php
// $retorno = mysqli_num_rows($teste_confirmado);
// print_r($retorno);

############ CADASTRAR LANÇAMENTO ###################
$consultar_saldo_anterior = "SELECT saldo_atual FROM conta; ";
$determinar_saldo_anterior = mysqli_query($conn, $consultar_saldo_anterior);

$valor = ' '; // pegar do POST
$categoria = ' '; // pegar do POST
$tipo = ' '; // pegar do POST
$saldo_anterior = $determinar_saldo_anterior; // preciso saber o saldo atual antes de atualizar a tabela lancamento e a tabela conta
$date = ' '; // pegar do POST
$data_lancamento = date_format($date,"Y-m-d") // colocar no formato do banco de dados
$comentario = ' '; // pegar do POST
$conta_id = '1'; // fixo por enquanto


if ($categoria == 'RECEITA') {
    (float)$saldo_atual = (float)$saldo_anterior + (float)$valor;
    $lancar_despesa = "INSERT INTO `lancamento`(`valor`, `categoria`, `tipo`, `saldo_anterior`, `saldo_atual`, `data_lancamento`, `comentario`, `conta_id`) VALUES ( ' ".$nome." ',' ".$categoria." ',' ".$tipo."' ',' ' ".$saldo_anterior." ',' ".$saldo_atual." ',' ".$data_lancamento."' ',' ".$comentario."' ',' ".$conta_id."')";

    $lancar_despesa_salvar = mysqli_query($conn, $lancar_despesa);

    if($lancar_despesa_salvar){
        echo "<script>alert('Receita lançada com sucesso!')</script>";
    }else{
        echo "<script>alert('Ops! Erro ao salvar dados!')</script>";
    }
} elseif($categoria == 'DESPESA') {
    # code...
}
