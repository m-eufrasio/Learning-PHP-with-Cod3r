<div class="titulo">Traits #01</div>

<?php
/*
* É possível colocar dentro de uma classe sem o uso de herança.
*/
// Forma de reuso de códigos
trait validacao {
  public $a = "Valor a";

  public function validarString($str) {
    return isset($str) && $str !== '';
  }
}

trait validacaoMelhor {
  public $b = "Valor b";
  private $c = "Valor c (privado)";

  public function vlaidarStringMelhor($str) {
    return isset($str) && trim($str);
  }
}

class Usuario {
  // Com a palavra reservada use você pode chamar a trait.
  use validacao, validacaoMelhor;

  public function imprimirValorC() {
    print '<br>' . $this->c;
  }
}
// Dessa forma não funciona. Não é possível acessar atributos ou metodos dentro da trait.
//var_dump(validacao->validarString(''));

// É preciso instancia uma classe para poder acessar os membros da trait.
$usuario = new Usuario();
var_dump($usuario->validarString(' '));
print '<br>';
var_dump($usuario->vlaidarStringMelhor(' '));
print '<br>';
print $usuario->a . '<br>' . $usuario->b;
var_dump($usuario->imprimirValorC());

/* Trait é uma forma de reuso de códigos mais simplificada que herança,
dentro dela vai atributos e métodos também. */
