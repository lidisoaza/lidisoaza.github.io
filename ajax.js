$(document).ready(function(){
	carregar();
});

function carregar(){
	$('#tabela').empty(); //Limpando a tabela
	$.ajax({
		type:'post',		//Definimos o método HTTP usado
		dataType: 'json',	//Definimos o tipo de retorno
		url: 'getDados.php',//Definindo o arquivo onde serão buscados os dados
		success: function(dados){
			for(var i=0;dados.length>i;i++){
				//Adicionando registros retornados na tabela
				$('#tabela').append('<tr><td><center>'+dados[i].id_denuncia+'</center></td><td><center>'+dados[i].nome+'</center></td><td><center>'+dados[i].email+'</center></td><td></center>'+dados[i].localidade+'</center></td><td><center>'+dados[i].endereco+'</center></td><td><center>'+dados[i].depoimento+'</center></td><td><center>'+dados[i].data_depoimento+'</center></td></tr>')
			}
		}
	});
}