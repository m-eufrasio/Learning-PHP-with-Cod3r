<div class="titulo">Break and Continue</div>

<?php
// Continue: aborta a atual e vai para a proxima;
// Break: ele vai para a próxima;

$cont = 15;
for(;;) { // Esse é um laço infinito. A não ser se houver um break.
    print "$cont <br>";
    $cont++;
    if($cont > 20) {
        break; // Sai fora do escopo.
    }
}
print "Fim!";
print '<hr>';
for(;;) {
    $cont++;
    if($cont % 2 === 1) { // Se for impar ele continua o calculo.
        continue; // Se for par ele sai e imprimi o valor.
    }
    print "$cont <br>";
    if($cont >= 30) { // Quando chegar no par 30 ele para de rodar o loop.
        break;
    }
}
print '<hr>';
// Nesse contexto o resultado deve ser exibido com valores ímpares da lista.
foreach(array(1, 2, 3, 4, 5, 6) as $valor) {
    if($valor === 5) break;
    if($valor % 2 === 0) continue;
    print "$valor <br>";
}
print "Fim!";

