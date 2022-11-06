<div class="titulo">Construtor & Destrutor</div>

<?php
class Pessoa {
  public $nome;
  public $idade;

  // ele é chamado dessa forma mesmo, com dois underlines.
  function __construct($novoNome, $idade = 18) { //Nos parâmetros você passa os atributos obrigatórios. 
    print 'Construtor invocado! <br>';
    // É preciso usar o this, caso contrário, os parâmetros só irão funcionar
    // dentro da function, no caso o construtor.
    $this->nome = $novoNome;
    $this->idade = $idade;
    // No momento que o objeto for instanciado, os parâmetros serão inicializados
    // sem a necessidade de passar valores nos atributos da classe.
  }

  function __destruct() { // Serve para destruir um objeto.
    print "E morreu! <br>";
  }

  public function apresentar() {
    print "{$this->nome}, {$this->idade} anos<br>";
  }
}

$pessoa = new Pessoa("Roberto", 31); // Agora com o construtor recebendo argumentos é possível instanciar o objeto passando parâmetros.
$pessoa->apresentar();
unset($pessoa); // O unset é o responsável por chamar o destrutor.

// $pessoa = new Pessoa(); // Se não for passado argumentos, não irá funcionar.

$pessoaB = new Pessoa("Pedro Paulo", 22); // Agora com o construtor recebendo argumentos é possível instanciar o objeto passando parâmetros.
$pessoaB->apresentar();
$pessoaB = null; // Dessa forma também se chama o destrutor.
