<?php
// mysqli_connect(host,username,password,dbname,port,socket);
$conn = mysqli_connect("localhost","id5554108_maflogin","Maf@1234","id5554108_database_maf");
    
if($conn){
    //echo "Conexão realizada com sucesso!";
}else{
    echo "Erro ao conectar!";
    exit();
}

?>