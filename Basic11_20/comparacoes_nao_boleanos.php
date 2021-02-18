<div class="titulo">Comparações não Boleanos</div>
<?php 
echo "
    // Falsy (undefined, null, 0, false, '', NaN - not a number)<br>
    // Truthy --o resto--<br>

    let corPersonalizada = 'vermelho';<br>
    let corPadrao = 'Azul';<br>
    let corPerfil = corPersonalizada || corPadrao;<br>

    console.log(corPerfil);<br>
    >>vermelho<hr>
    let corPersonalizada = '';<br>
    let corPadrao = 'Azul';<br>
    let corPerfil = corPersonalizada || corPadrao;<br>
    console.log(corPerfil);<br>
    >>azul<hr>
    let numeroPersonalizada = '';<br>
    let numeroPadrao = '1';<br>
    let numeroPadraoDois = '8';<br>
    let mumeroPerfil = numeroPersonalizada || numeroPadrao || numeroPadraoDois;<br>
    console.log(numeroPerfil);<br>
    >>1
"
?>