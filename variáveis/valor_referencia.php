<div class="titulo">Valor x Referência</div>

<?php
$variavel = 'valor inicial';
print $variavel;

// Atribuição por Valor
$variavelValor = $variavel;
print "<br>$variavelValor";
$variavelValor = "novo valor";
print "<br>$variavelValor | ";
print "$variavelValor";

// Atribuição por Referência
$variavelValor = &$variavel;
$variavelValor = 'mesma referência';

print "<br>$variavel | $variavelValor";
