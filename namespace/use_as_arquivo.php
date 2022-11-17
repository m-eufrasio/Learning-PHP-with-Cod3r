<?php
namespace Nome\Bem\Grande;
print __NAMESPACE__ . '<br>';

const CONSTANTE = 123;

function soma($a, $b) 
{
    return $a . $b; // Concatena de próposito para ber mais abaixo.
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
// Dessa fprma o acesso não funciona, pois estou acessando de forma relativa.
//print Nome\Bem\Grande\CONSTANTE . '<br>';
// Para imprimir a CONSTANTE é preciso colocar a \ antes:
print \Nome\Bem\Grande\CONSTANTE . '<br>';
// Existe conflitos sim na funciton e na classe, mas não na constante.
use const Nome\Bem\Grande\CONSTANTE; // usando o use tenho acesso.
print CONSTANTE . '<br>';
// Para usar um alias (a CONSTANTE neste caso), use as:
use Nome\Bem\Grande as ctx;
print soma(1, 2) . '<br>'; // Resultado dará 12, pois usa a function errada.
print ctx\soma(1, 3) . '<br>'; // Aqui usa a function certa do outro arquivo.