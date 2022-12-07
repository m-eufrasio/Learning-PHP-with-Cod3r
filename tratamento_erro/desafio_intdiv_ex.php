<?php
namespace Aritmetica;
/*
* Como estamos no contexto de namespace, para acessar o Exception é preciso
* inserir a barra antes do Exception. Acessa p raiz.
*/
class NaoInteiroException extends \Exception 
{

}

function intdiv($a, $b) {
    if($b == 0) {
        /*
        * Essa exception já existe no php. A barra é para mostrar que 
        * o acesso é direto da API do php.
        */
        throw new \DivisionByZeroError;
    }
    if($a % $b > 0) {
        throw new NaoInteiroException;
    }
    return $a / $b;
}