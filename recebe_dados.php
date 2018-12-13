<?php
	include("conectar.php");
	
	date_default_timezone_set('America/Sao_Paulo');
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$localidade = $_POST['localidade'];
	$endereco = $_POST['endereco'];
	$depoimento = $_POST['depoimento'];
	$data_depoimento = date('Y-m-d H:i');
	
	
	$inseredados = mysqli_query( $link, "INSERT INTO denuncias (nome,email,localidade,endereco,depoimento,data_depoimento) VALUES ('$nome','$email','$localidade','$endereco', '$depoimento','$data_depoimento')");
	
	if($inseredados){
    	echo "<script>alert('Denúncia registrada com sucesso!\\nNome: $nome \\nEmail: $email \\nLocalidade: $localidade \\nEndereço: $endereco \\nDepoimento: $depoimento');location.href = 'index.html';</script>";
		
		?>

		

    <?php
    }else{
    	echo ("<script>alert('Ocorreu um erro ao tentar realizar o cadastro... '); window.location.href = 'index.html' </script>");
    	//header("Location:index.php");
    }
	
	

?>

