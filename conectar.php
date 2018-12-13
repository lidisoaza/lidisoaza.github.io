<?php
	$servidor = 'sql206.epizy.com';
	$banco = 'epiz_22766202_trabalho';
	$usuario = 'epiz_22766202';
	$senha = 'bzHRy8S7zAN';
	$link = mysqli_connect($servidor, $usuario, $senha, $banco);
	if(!$link)
	{
    	echo "erro ao conectar ao banco de dados!";
    exit();
	}
?>