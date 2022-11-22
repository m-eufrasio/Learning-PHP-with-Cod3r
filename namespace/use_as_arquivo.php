<?php
namespace Nome\Bem\Grande;
print __NAMESPACE__ . '<br>';

const CONSTANTE = 123;

function soma($a, $b) 
{
    return $a . $b; // Concatena de próposito para ver mais abaixo.
}

class Classe
{
    public $var;

    function func()
    {
        // Aparece o namespace, classe e método usados na respectiva sequência:
        print __NAMESPACE . ' -> ' . __CLASS__ . ' -> ' . __METHOD__ . '<br>';
    }
}
// Dessa forma o acesso não funciona, pois estou acessando de forma relativa.
// print Nome\Bem\Grande\CONSTANTE . '<br>';
// Para imprimir a CONSTANTE é preciso colocar a \ antes:
print \Nome\Bem\Grande\CONSTANTE . '<br>';
// Existe conflitos sim na funciton e na classe, mas não na constante.
use const Nome\Bem\Grande\CONSTANTE; // usando o use tenho acesso.
print CONSTANTE . '<br>';
// Para usar um alias (a CONSTANTE neste caso), utilize as:
use Nome\Bem\Grande as ctx;
print soma(1, 2) . '<br>'; // Resultado dará 12, pois usa a function errada.
print ctx\soma(1, 3) . '<br>'; // Aqui usa a function certa do outro arquivo.

// use function Nome\Bem\Grande\soma;
// Foi definido um alias para o método e dessa forma não gera conlfitos;
use function Nome\Bem\Grande\soma as somaReal; // Pega de outro arquivo;
print somaReal(5, 3) . '<br>';

$a = new Classe();
$a->func();

$b = new \Nome\Bem\Grande\Classe();
$b->func();
// Essa é a forma usando alias (que já foi definido);
$b = new ctx\Classe();
$b->func();
// É possível inserir um alias para a classe e fica desta forma:
    use \Nome\Bem\Grande\Classe as D;
$b = new D();
$b->func();