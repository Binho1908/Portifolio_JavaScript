<div class="titulo">Functions</div>

<?php 
	echo "
		//verbo + Substantivo <br>
		let corSite = 'azul'; <br>
		function resetaCor() { <br>
			corSite = ' '; <br>

			}; <br>
		console.log(corSite); <br>
		>>'azul' <br><br>
		resetCor(); <br>
		>> ' ' <br><hr>
		function resetaCor(cor){ <br>
			corSite = cor; <br>
		} <br>
		resetaCor('azul'); <br>
		console.log(corSite); <br>
		>>azul <hr>
		corSite = ' ' <br>
		function resetaCor(cor,tonalidade){ <br>
			corSite = cor + tonalidade; <br>
		} <br>
		resetaCor('azul ','claro'); <br>
		console.log(corSite); <br>
		>>azul claro<hr>



	";
 ?>