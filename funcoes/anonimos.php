<div class="titulo">Funções Anônimas</div>

<?php
// Função anônima é uma função sem nome.
$soma = function($a, $b) { // uma variável recebe a funcion.
    return $a + $b;
};

print $soma(1, 2) . '<br>';

function executar($a, $b, $op, $funcao) {
  $resultado = $funcao($a, $b);
  print "$a $op $b = $resultado<br>";
}
// 2 e 3 serão passados para  $a e $b dentro de $funcao
executar(2, 3, '+', $soma); // $soma é o parâmetro de função.

$multiplicacao = function($a, $b) {
  return $a * $b;
};

executar(9, 3, '*', $multiplicacao);

$divisao = function($a, $b) {
  return $a / $b;
};

executar(9, 3, '/', $divisao);