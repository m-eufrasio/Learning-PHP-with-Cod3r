<div class="titulo">Atribuições PHP</div>

<?php
$title = "Atribuições";

$numero = 10;
print '<br>' . $numero;
$numero = $numero - 3;
print '<br>' . $numero;
$numero = $numero + 2.5;
print '<br>' . $numero;
// Infix, significa que o símbolo do operador fica entre dois operandos!
// Operadores unários, como no exemplo abaixo que opera apenas em um único operando, irá decrementar ou incrementar 1;
// Pode decrementar uma variável, mas não um valor literal.
$numero--; // pós fixado
--$numero; // pré fixada
print '<br>' . $numero;
$numero++; // $numero = $numero + 1
++$numero; 
print '<br>' . $numero;
$numero -= 5;
print '<br>' . $numero;
$numero += 6;
print '<br>' . $numero;
$numero *= 2;
print '<br>' . $numero;
$numero /= 2;
print '<br>' . $numero;
$numero %= 5;
print '<br>' . $numero;
$numero **= 5;
print '<br>' . $numero;
$numero .= 5; // Nesse exemplo ele está concatenando 4
print '<br>' . $numero;

# Para strings

$texto = "Esse é um texto";
print '<br>' . $texto;
$texto = $texto . " qualquer";
print '<br>' . $texto;
$texto .= " de verdade!";
print '<br>' . $texto;

//$valorInexistente = 'valor existente';
print '<br>' . $valorInexistente;
var_dump($valorInexistente);
$valor = $valorInexistente ?? 'valor default';
print '<br>' . $valor; // caso eu descomente a variável $valorInexistente, o valor da variável $valor será: valor existente. o ?? é uma condição e validação.
print '<hr>';
print "teste som";
print '<br>';
print "chinelo";
