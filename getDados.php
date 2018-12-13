<?php
    //Conectando ao banco de dados
    require_once("conectar.php");
    
    //Consultando banco de dados
    $sql = mysqli_query ($link,"SELECT * FROM denuncias"); 
	
    while($resultado = mysqli_fetch_assoc($sql)){
        $vetor[] = array_map('utf8_encode', $resultado); 
    }    
    
    //Passando vetor em forma de json
    echo json_encode($vetor);
    
?>