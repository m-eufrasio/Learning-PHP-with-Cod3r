<div class="titulo">Comparação de Arrays</div>

<?php
$array1 = ["nome" => "João", "idade" => 28];
$array2 = ["nome" => "João", "idade" => 28];
var_dump($array1 == $array2); // Resultado é um boolean true
var_dump($array2 === $array1); // Resultado é um boolean true

$array3 = ["idade" => 28, "nome" => "João"];
print "<br>";
var_dump($array1 == $array3); // Mesmo mudando a ordem dos elementos ele dará true.
var_dump($array1 === $array3); // Estritamente igual dará false, pois a ordem influencia.
var_dump($array1 != $array3); // True
var_dump($array1 !== $array3); // False
print "<br>";

$array4 = ["idade" => '28', "nome" => "João"];
var_dump($array1 == $array4); // Mesmo mudando o tipo da chave idade, nesse operador irá dar true.
var_dump($array1 === $array4); // Além da ordem, o tipo da chave idade é em string.
 

