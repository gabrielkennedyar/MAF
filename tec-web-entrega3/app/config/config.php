<?php
// $conn = mysqli_connect("localhost","id5554108_maflogin","Maf@1234","id5554108_database_maf");
// error_reporting(E_ALL & ~E_NOTICE);
// ini_set('display_errors','On');
header('Content-Type: text/html; charset=utf-8');
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors','On');

if (true) { // Está desta forma para determinar quando a conexão será no servidor e quando será na nossa própria máquina
    $servidor   = 'localhost';
    $usuario    = 'id5554108_maflogin';
    $senha      = 'Maf@1234';
    $banco      = 'id5554108_database_maf';
    $conn = "mysql:host=" . $servidor . ";dbname=" . $banco;
} else {
    $servidor   = 'localhost';
    $porta      = '3306';
    $usuario    = 'root';
    $senha      = 'root';
    $banco      = 'id5554108_database_maf';
    $conn = "mysql:host=" . $servidor . ";port=" . $porta . ";dbname=" . $banco;
}
try
{
    $pdo = new PDO($conn, $usuario, $senha);
    // echo 'Conectado!<br>';
}
catch (PDOException $e)
{
    echo 'Falha na conexão: {'.$e->getMessage().'}';
}