<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "sistema_patrimonio";

	//Criar a conexao
	$conn = new mysqli($servidor, $usuario, $senha, $dbname);

	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}

?>
