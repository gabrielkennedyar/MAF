<?php  
// Tem que ter no início de todas as páginas que vão ter alguma conexão com o banco de dados
include("config.php");

$teste = " SELECT * FROM cliente; ";
$teste_confirmado = mysqli_query($conn,$teste); // O primeiro argumento tem que ser sempre o $conn, que vem do config.php
$retorno = mysqli_num_rows($teste_confirmado);
print_r($retorno);


