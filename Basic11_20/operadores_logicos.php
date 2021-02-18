<div class="titulo">Operadores Lógicos</div>

<?php 
    echo "
        //Operador lógico ou (||)<br>
        //Retornar true se um dos operadores forem true<br>

        let maiorDeIdade = false;<br>
        let possuiCarteiraDeTrabalho = false;<br>
        let podeAplicar = maiorDeIdade || possuiCarteiraDeTrabalho;<br>

        console.log('pode aplicar: ',podeAplicar);<hr>
        >>pode aplicar: false
        // Operador NOT (!)<br>

        let candidatoRecusado = !podeAplicar;<br>

        console.log('candidatoRecusado);
        >>Candidaro Recusado true
    "
?>