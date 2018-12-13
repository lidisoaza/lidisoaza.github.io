<?php
require_once("conectar.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
	  <title>Denúncias Porto Alegre</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
      <script src="ajax.js"></script>
	  
	  
		
	</head>
	
    <div class="container">
        <div class="row">
            <div class="col s8 m8 l8 offset-s6">
                    <div class="row">
                        <div class="input-field col s12 center">
                            <h2><center>Lista de Denúncias</center></h2></br>
                        </div>
                    </div>

                    <div class="row">
						<table class="table table-striped" onclick="carregar()">
                            <thead>
								<tr>
									<th><center>ID Denúncia</center></th>
                                    <th><center>Nome</center></th>
                                    <th><center>E-mail</center></th>
									<th><center>Localidade</center></th>
									<th><center>Endereço</center></th>
							     	<th><center>Depoimento</center></th>
									<th><center>Data do Depoimento</center></th>
								</tr>
							</thead>
							<div class="container">
								<button class="btn btn-warning btn-sm" onclick="window.location.href='index.html'"><< Voltar a home</button>
								<button class="btn btn-primary btn-sm" onclick="carregar()">Carregar Dados</button>
								<p><small><b>*Você também pode atualizar dados clicando na tabela. </b></small></p>
							</div>
							
							<tbody id="tabela">
								
							</tbody>
						</table>
					
					
                        
                </div>
            </div>
        </div>
    </div>
	
</html>


