<div class="titulo">Array</div>

<?php
// A separação dos elementos dentro do array é por vírgula.
$lista = array(1, 2, 3, 4.5, "texto");
// Algumas formas de imprimir o array:
print $lista . '<br>'; // Essa forma simplesmente irá imprimir: Array. Não é interessante.
var_dump($lista); // É uma opção, mas msm assim o vardump não serve para isso.
print_r($lista); // Irá imprimir de forma legível os elementos do array.

// Alterando um elemento do array através do índice.
print $lista[0] = 123456;

// Você irá acessar os elementos do array através do índice dele.
print '<br>' . $lista[0]; // Nesse caso está acessando o índice 0 (o primeiro);
print '<br>' . $lista[3];
print '<br>' . $lista[4]; 

$texto = 'Esse é um texto de teste';
print '<br>' . $texto[0];
print '<br>' . $texto[2];
print '<br>' . $texto[11];
print '<br>' . mb_substr($texto, 10, 5); // O último parâmetro é a quantidade de caracteres que quero obter.
