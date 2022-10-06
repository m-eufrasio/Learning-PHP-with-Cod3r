<div class="titulo">Argumentos Variáveis</div>

<?php
function soma($a, $b) {
  return $a + $b;
}

print soma(14, 15) . '<br>';
print soma(6, 5, 4) . '<br>'; // Quando passa do número de argumentos, eles são ignorados.

function somaCompleta(...$numeros) { // Colocando os ... os argumentos serão colocados detnro de um array. 
  $soma = 0;
  foreach($numeros as $num) { // Através do foreach é possível adicionar mais valores de parâmetros.
    $soma += $num;
  }
  return $soma;
}

// Por mais que tenha apenas um parâmetro na function, com  os ... permite a adição de mais valores na funciton.
print somaCompleta(1, 2, 3, 4, 5);

/** Se for passar um array de argumento da function, tem q tomar cuidado que
 * neste caso irá ser incluido um array dentro de outro. Logo é preciso 
 * inserir os ... antes do argumento (caso ele seja array). ** */

 $array = [6 ,7, 8];
 print '<br>' . somaCompleta(...$array);

 // É possível criar uma function com arugmento atômico e array:
 function membros($titular, ...$dependentes) {
  print "Titular: $titular <br>";
  if($dependentes) {
    foreach($dependentes as $dep) {
      print "Dependentes: $dep <br>";
    }
  }
 }

 print '<br>';
 membros("Ana Silva", "Pedro", "Rafaela", "Amanda"); // O primeiro nome vai para o primeiro argumento. O restante entra no array.