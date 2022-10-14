<div class="titulo">Closure e Callable</div>

<?php

$soma1 = function($a, $b) {
  return $a + $b;
};
// Dessa forma, não é uma closure!
function soma2($a, $b) {
  return $a + $b;
};
// Quando chamamos a function dessa forma, ele se chama callable.
print $soma1(2, 3) . ' ';
print (is_callable($soma1) ? "sim" : "não") . '<br>';

print $soma2(2, 5) . ' '; // Aqui já não é mais callable, deixou de ser funciton.
print (is_callable($soma2) ? "sim" : "não") . '<br>';

/* ** QUANDO É DEFINIDO UMA FUNCTION ANÔNIMA, ELA É ARMAZENADA NUMA CLASSE ** */

var_dump($soma1);

function executar1($a, $b, $op, Callable $funcao) {
  $resultado = $funcao($a, $b) ?? 'Nada';
  print "$a $op $b = $resultado<br>";
}

print '<br>';
executar1(2, 3, '+', $soma1); 
executar1(2, 3, '+', soma2); 

/* ** CLOSURE É UMA FUNCTION DENTRO DE UMA CLASSE,
* É TAMBÉM UMA CLASSE QUE REPRESENTA UMA FUNCTION ANÔNIMA ** */

function executar2($a, $b, $op, Closure $funcao) {
  $resultado = $funcao($a, $b) ?? 'Nada';
  print "$a $op $b = $resultado<br>";
}

print '<br>';
executar2(2, 3, '+', $soma1); // Apenas essa function irá funcionar.
executar2(2, 3, '+', soma2); 

// A função is_callable() é usada para ver se a função anônima pode ser chamada.
// Referente a esta aula ela é a mais importante.