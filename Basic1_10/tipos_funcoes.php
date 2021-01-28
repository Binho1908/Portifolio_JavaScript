<div class="titulo">Tipos de Funçoes</div>

<?php 
	echo "
	<h3>Primeiro tipo de funçao: Realiza uma tarefa, não devolve nada</h3> <br>
	function dizerNome(){ <br>
		console.log('Jhonatan'); <br>
	} <br>
	dizerNome();<hr><hr>

	<h3>Segundo tipo: Faz um calculo ou operação e retorna algo</h3> <br>
	
	function MultiplicarPorDois{valor}{ <br>
		return valor*2; <br>
	} <br>
	console.log(MultiplicarPorDois(5)); <br>
	>>10<br><hr>
 	
	let resultado = MultiplicarPorDois(5) <br>
	console.log(resultado); <br>
	>>10
	";
 ?>