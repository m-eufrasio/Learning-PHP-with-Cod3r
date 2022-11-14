<?php namespace games; ?> 
<!-- Namespace sempre precisa ser a primeira sentença do código. Caso
contrário dará erro. -->
<div class="titulo">Exemplo Básico</div>

<?php
// Constante para poder ver qual é o namespace usado.
print __NAMESPACE__ . '<br>';
// Automaticamente, essa constante está associada ao namespace games.
const CONSTANTE1 = 123;
// Usando define, é preciso colocar o namespace e depois o nome da const.
define('games\CONSTANTE2', 456);
// É possível declarar uma const igual, mas que esteja atrelado a raiz.
define('CONSTANTE2', 852);
// Outra forma de usar o define:
define(__NAMESPACE__ . "\CONSTANTE3", 789);
// Também pode usar o define com namespace inexistentes:
define('outro_games\CONSTANTE4', 741);

print CONSTANTE1 . '<br>';
print CONSTANTE2 . '<br>';
// É preciso colocar a contra-barra antes para acessar o valor da raiz.
print \CONSTANTE2 . '<br>';
// Devido ao sub-namespace, esse acesso dará erro.
//print games\CONSTANTE3 . '<br>'; // Esse acessso é de forma relativa.
// Essa é outra forma de acessar o valor, usando a função constant.
//print constant(__NAMESPACE__ . '\CONSTANTE3' . '<br>');
//print CONSTANTE4 . '<br>'; // Dessa forma irá printar literalmente CONSTANTE4
print \outro_games\CONSTANTE4 . '<br>';

// Essa function pertence ao namespace.
function soma($a, $b) 
{
    return $a + $b;
}

print \games\soma(1, 2) . '<br>';
print soma(1, 2) . '<br>'; // Está atrelado a este namespace, logo irá funfar.

// Essa function já existe na API do php e pode dar conflito.
function strpos($str, $text)
{
 print "Buscando o texto '{$text}' em '{$str}' <br>";
 return 1;
}

print strpos('Texto genérico para busca', 'busca') . '<br>';
// Para acessar a API do php é usado a contra-barra acessando o valor raiz.
print \strpos('Texto genérico para busca', 'busca') . '<br>';


/*
<?php namespace games\s\sub\name; ?> 

* Esse namespce acima é um exemplo de sub-namespace, no qual é acessado
* um caminho absoluto.
*/