<?php namespace App; ?>
<div class="titulo">Sub-Namespaces</div>

<?php
print __NAMESPACE__ . '<br>';
const CONSTANTE = 123;

namespace App\Principal;
print __NAMESPACE__ . '<br>';
const CONSTANTE = 456;

namespace App\Principal\Especifico;
print __NAMESPACE__ . '<br>';
const CONSTANTE = 789;
/*
* Sendo o namespace mais específico, se eu chamar a variável que se replica
* nas demais linhas do código, o valor exibido será do namespace mais especí.
*/
print CONSTANTE . '<br>';
// Dessa forma abaixo é possível acessar os outros namespaces explicitamente.
print constant('\\' . __NAMESPACE__ . '\CONSTANTE') . '<br>';
print constant(__NAMESPACE__ . '\CONSTANTE') . '<br>'; // Essa é outra forma.
print \App\CONSTANTE . '<br>'; // Essa é outra forma.
print \App\principal\CONSTANTE . '<br>'; // Essa é outra forma.



