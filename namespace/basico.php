<?php namespace Games; ?> 
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
define('outro_game\CONSTANTE4', 741);

print CONSTANTE1 . '<br>';
print CONSTANTE2 . '<br>';
// É preciso colocar a contra-barra antes para acessar o valor da raiz.
print \CONSTANTE2 . '<br>';
// Devido ao sub-namespace, esse acesso dará erro.
print games\CONSTANTE3 . '<br>'; // Esse acessso é de forma relativa.
// Essa é outra forma de acessar o valor, usando a função constant.
print constant(__NAMESPACE__ . '\CONSTANTE3' . '<br>');
print CONSTANTE4 . '<br>';

/*
<?php namespace games\s\sub\name; ?> 

* Esse namespce acima é um exemplo de sub-namespace, no qual é acessado
* um caminho absoluto.
*/