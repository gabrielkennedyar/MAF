<?php

    include 'config.php';

    $usuario 			 = $_POST['login'];
    $senha 			     = $_POST['senha'];
    
    $query = sprintf("SELECT * FROM `cliente` WHERE `cpf` = '$usuario' AND `senha`= '$senha'");

    $result = mysqli_query($conn,$query); // O primeiro argumento tem que ser sempre o $conn, que vem do config.php

    
	if(mysqli_num_rows ($result) > 0 )
	{
	//$_SESSION['login'] = $usuario;
	//$_SESSION['senha'] = $senha;
	header('location:home.php');
	}
	else{
    //unset ($_SESSION['login']);
    //unset ($_SESSION['senha']);
     
     echo "<script>alert('Usuario ou senha invalidos. Tente novamente!');
     top.location.href=\"login.php\";</script>";
     
    //header('location:login.php');
    }

?>