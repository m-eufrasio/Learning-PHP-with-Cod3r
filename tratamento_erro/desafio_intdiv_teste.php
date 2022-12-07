<div class="titulo">Desafio intdiv correção</div>

<?php
require_once('desafio_intdiv_ex.php');
/*Como vamos usar uma function de outro arquivo é preciso fazer dessa forma
* devido o namespace, mas também é possível inserir um alias neste namespace
*/
use function \Aritmetica\intdiv;
// Pode também referenciar um namespace completo com alias;

try {
    print intdiv(8, 3) . '<br>'; 
    // a variável $e pode referenciar esse erro com getMessage();
} catch(\Aritmetica\NaoInteiroException $e) {
   print 'Resultado não é um número inteiro <br>'; 
}

try {
    print intdiv(8, 0) . '<br>'; 
} catch(DivisionByZeroError $e) {
   print 'Divisão por zero <br>'; 
}

print intdiv(8, 2) . '<br>';