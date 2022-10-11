<div class="titulo">Recursividade</div>

<!-- Recursividade é uma função que chama ela mesma  -->

<?php
// Tentativa
function soma($a) {
  for($i = 0; $i < 10; $i++) {
    $resultado = $a + $i; 
    print $resultado . '<br>';
  }
};

print soma(2);
print '<hr>';

function somaUmAte($numero) {
  $soma = 0;
  for(; $numero >= 1; $numero--) {
    $soma += $numero;
  }
  return $soma;
}

print somaUmAte(5) . '<br>';
print '<br>';

// Outra forma de fazer:
function somaUmAte2($numero) {
  $soma = 0;
  for($i = 1; $i <= $numero; $i++) {
    $soma += $i;
  }
  return $soma;
}

print somaUmAte2(6);
print '<br>';

// Versão recursiva:
/* ** DUAS COISAS SÃO FUNDAMENTAIS, CONDIÇÃO DE PARADA E A ABSTRAÇÃO DO PROBLEMA ** */
function somaRecursivaUmAte($numero) {
  // Condição de parada:
  if($numero === 1) {
    return 1;
  }
  return $numero + somaRecursivaUmAte($numero - 1);
}

print somaRecursivaUmAte(10) . '<br>';

// Forma ainda mais reduzida, porém é recomendado as vezes fazer uma lógica com
// um pouco mais de linhas para que fique mais claro o código. Dessa forma,
// está muito simplificado e não fica muito claro.
function somaRecursivaEconomica($numero) {
  return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero - 1);
}

print somaRecursivaEconomica(10) . '<br>';




