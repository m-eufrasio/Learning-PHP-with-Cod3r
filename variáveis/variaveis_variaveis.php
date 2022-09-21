<div class="titulo">Variáveis Variáveis</div>

<?php
$a = 'valorA';
$$a = 'valorAA';
print "$a {$$a} ${$a} $valorA"; // Para poder interpretar o dolar duas vezes, é necessário usar as chaves {}, caso contrário terá problemas com a interpretação do código.

// Este exemplo abaixo informa melhor como que funciona esse novo conceito.
$b = "valorB";
// A variável que recebe dois símbolos de dólar, faz exatamente como está logo abaixo.
$valorB = "valorBB";

print '<br>';
$epa = 'opa';
$opa = 'vish';
$vish = 'eita!!';
print "$epa {$$epa} {$$$epa}"; // quando existem mais variáveis e você quer acessar um conteúdo mais 'distante', você irá acrescentar mais um símbolo de dólar, quantas vezes precisar.

# Usando INT como experimento:
print '<br>';
print "Teste com INT:" . '<br>';
$var = 1;
$$var = 2;
print "$var | ${$var} | {$$var} ${1}";



