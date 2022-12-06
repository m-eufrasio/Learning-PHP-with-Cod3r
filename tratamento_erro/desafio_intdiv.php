<?php namespace DivisorTeste; 
use Exception;
use DivisorTeste\divisaoException;
?>
<div class="titulo">Desafio intdiv</div>

<?php
/*
* Crie o método intdiv para:
* - Lançar uma exceção quando tentar dividir por zero 
* - Lançar uma exceção quando o resultado não for inteiro 
* - Dividir normalmente nos demais casos

* Os testes:
* - intdiv com os parametros 8 e 2 [Sucesso]
* - intdiv com os parametros 8 e 3 [Exceção]
* - intdiv com os parametros 8 e 0 [Exceção]
* - intdiv "original" com os parametros 8 e 3 [Sucesso]
*/
function intdiv($dividendo, $divisor)
{
    return $dividendo / $divisor;
}

class divisaoException extends Exception
{
    public function __construct($message, $code = 0, $previous = null) {
        print "Erro ao dividir: $message <br>";
        parent::__construct($message, $code, $previous);
    }
}
//throw new divisaoException("Divisão por zero não é permitido!");
function todasDivisoes($calculo)
{
    if ($calculo == 0) {
        throw new divisaoException("Divisão por zero não é permitido!");
    }
    if(intdiv(8, 3)) {
        throw new divisaoException("Valores quebrados não são permitidos!");
    }
}
$divisaoPorZero = intdiv(8, 0);

try {
    print $divisaoPorZero;
} catch(divisaoException $e) {
    print "Não foi possível dividir: {$e->getMessage()}, valor gerado: $divisaoPorZero <br>";
}



