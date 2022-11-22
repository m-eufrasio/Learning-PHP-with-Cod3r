<?php
namespace Pessoa;

class Pessoa
{
  public $nome;
  public $idade;

  function __construct($novoNome, $idade = 18)
  {
    print 'Construtor invocado! <br>';
    $this->nome = $novoNome;
    $this->idade = $idade;
  }

  function __destruct()
  {
    print "E morreu! <br>";
  }

  public function apresentar()
  {
    print "{$this->nome}, {$this->idade} anos<br>";
  }
}