<div class="titulo">Traits #02</div>

<?php
/* 
*Nessa situação temos duas traits diferentes, mas que possuem métodos com
*o mesmo nome, gerando assim um conflito mesmo que no body tenha conteúdos
*diferentes.
*/
trait validacao {
  function validarString()
  {
    return isset($str) && $str !== '';
  }
}

trait validacaoMelhor 
{
  function validarString($str)
  {
    return isset($str) && trim($str);
  }
}

class Usuario {
  // Apenas colocando o use vai gerar problema.
  use validacao, validacaoMelhor {
    /* 
    *Aqui está dizendo: acesse a trait validacaoMelhor e use seu método validarString
    *em vez do método da trait validacao
    */
    validacaoMelhor::validarString insteadOf validacao;
    // É possível usar um alias:
    validacao::validarString as validacaoSimples;
  }
}

$usuario = new Usuario();
var_dump($usuario->validarString(' '));
print '<br>';
var_dump($usuario->validacaoSimples('teste'));