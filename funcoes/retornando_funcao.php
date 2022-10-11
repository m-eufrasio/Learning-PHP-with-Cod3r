<div class="titulo">Retornando Função</div>

<?php
function soma($a) {
  return function($b) { // Retorno de uma função anônima.
    return $a + $b; // O valor de $a foi definido fora da function anônima.
  };
}
// O 3 representa o valor de $a.
// soma retorna outra function, então quando ela for executada irá retornar outa function.
// Para acessar a os valores da function anônima, é preciso passar dois pares de parênteses.
print soma(3)(3) . '<br>'; // O segundo parâmetro é o $b.

// O resultado dessa chamada será 3 pq o $a não fica disponível a primeiro momento na primeira function.

function soma2($a) {
  return function($b) use ($a){ // Para usar o valor $a é preciso usar a palavra reservada use e passar entre parênteses o valor.
    return $a + $b; 
  };
}

print soma2(13)(3);

/* ** Por que você irá querer que uma função chame outra? Quando em
* certa parte do código você precisa chamar algo específico em certo momento,
* então é usado o use. Por exemplo, vc chama o valor $a várias vezes e cada 5
* chamadas dele uma é do $b, considerando que para chamar o $a leve
* 30s e o $b 5s, isso irá melhorar o desempenho em vez de chamar os dois
* juntos, pois se fosse juntos a chamada seria de 35s em vez de 30s.
*  ** */

// EXEMPLO SIMPLES:

$doisMais = soma(2); // Essa variável seria, fazendo um paralelo com o exemplo anterior, seria o $b.
print '<br>' . $doisMais(10);