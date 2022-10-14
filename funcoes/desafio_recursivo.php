<div class="tiulo">Desafio Recursão</div>

<?php

$array = [1, 2, [3, 4, 5], 6, [7, [8, 9]]];

function imprimirArray($array, $nivel = '>') {
  foreach($array as $elemento) {
    if(is_array($elemento)) { // Primeiro irá validar se é um array
      // Irá refazer a function (mudando os parâmetros), para imprimir os demais valores.
      imprimirArray($elemento, $nivel . $nivel[0]); // Caso seja um array dentro do outro, irá concatenar o nivel.
    } else {
      print "$nivel $elemento<br>";
    }
  }
}

print imprimirArray($array);
print imprimirArray($array, "*");