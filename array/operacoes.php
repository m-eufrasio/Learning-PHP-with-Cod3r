<div class="titulo">Operações</div>

<?php
// É possível usar arrays com colchetes também.

$dados1 = [
  "nome" => "Jose",
  "idade" => 28
];

$dados2 = [
  "naturalidade" => "Fortaleza"
];
// Dessa forma é concatenado arrays. Lembrando que a ordem dos elementos
// exibidos depende de qual variável bem primeiro.
$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

print '<br>' . is_array($dadosCompletos); // Exibe 1, dizendo que é true.
print '<br>' . count($dadosCompletos); // Irá contar a quantidade de elementos dentro do array.

print '<br>';
// Esse método pega o índice aleatório do array.
$indice = array_rand($dadosCompletos);
print "$indice = $dadosCompletos[$indice]";
print '<br>';
// Deve-se tomar cuidado com a interpolação, nesse caso não será lido 'idade'.
// Para resolver isso é preciso usar as chaves {}.
print "{$dadosCompletos['idade']}<br>";
print "${dadosCompletos['idade']}"; // Inserindo as $ antes das chaves.

unset($dadosCompletos["nome"]); // Esse método remove um elemento do array.
print '<br>';
print_r($dadosCompletos); // O nome não será exibido.
print '<br>';
var_dump($dadosCompletos);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $pares + $impares;
print '<br>';
print_r($decimais); // O resultado é somente os pares, devido a prioridade.

$decimais = array_merge($pares, $impares); // Função que junta dois arrays (melhor).
print '<br>';
print_r($decimais);

sort($decimais); // Ele irá organizar os indices e os elementos de dois arrays misturados.
print '<br>';
print_r($decimais);



