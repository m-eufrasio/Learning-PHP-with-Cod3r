<div class="titulo">Multidimensionais</div>

<?php
$dados = [
  [
    "nome" => "Roberto",
    "idade" => 26,
    "naturalidade" => "São Paulo"
  ],
  
  "pessoa" => [ // Não tem problema em colocar uma chave no array.
    "nome" => "Maria",
    "idade" => 21,
    "naturalidade" => "Bahia"
  ]
];

print_r($dados);
// Arrays com arrays dentro, iremos acessar pelo indice do array e depois
// o indice do elemento:
print '<br>' . $dados[0]["nome"]; // Índice 0 representa o primeiro array.
print '<br>' . $dados["pessoa"]["nome"];

// Acrescentando um novo array no array principal. Dentro das [] de $dados
// é possível colocar a chave que irá representar o novo array.
$dados[] = [ 
  "nome" => "Florinda",
  "idade" => 46,
  "naturalidade" => "Cidade do México"
]; 

print '<br>';
print_r($dados);
print '<br>' . $dados[1]["idade"];

// Alterando elementos do array multidimensional.
/* $dados[1]["nome"] = "Jotinha";
print_r($dados[1]["nome"]); */

// Inserindo uma nova chave e um novo valor dentro do array.
$dados[1]["vizinhos"] = "Chavão";
print '<br>';
print_r($dados[1]);

// Retirando um array dentro do array principal.
unset($dados[1]); 
print '<br>';
print_r($dados);
print '<br>';
// Dessa forma será impresso NULL.
var_dump($dados[1000]);


