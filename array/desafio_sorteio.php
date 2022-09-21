<div class="titulo">Sorteio</div>

<?php
$nomes = ["Elza", "Rapunzel", "Branca de Neve", "Cinderela"];
$mistu = array_rand($nomes);
print "<h1>Nome: ${nomes[$mistu]}</h1>";