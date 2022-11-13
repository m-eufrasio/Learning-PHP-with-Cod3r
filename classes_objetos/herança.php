<div class="titulo">Herança</div>

<?php
class Pessoa {
  public $nome;
  public $idade;
  // Os nomes dos atributos, quanto passados como argumentos, pode mudar o nome!
  function __construct($novoNome, $novaIdade) { 
    $this->nome = $novoNome;
    $this->idade = $novaIdade;
    print "Pessoa criada! <br>";
  }

  function __destruct() {
    print "Usado o unset para destruir este objeto";
  }

  public function apresentar() {
    print "{$this->nome}, {$this->idade}";
  }
}

Class Usuario extends Pessoa {
  public $login;
  // É possível definir um novo construtor para a subclasse.
  function __construct($nome, $idade, $login) { 
    $this->nome = $nome;
    $this->idade = $idade;
    $this->login = $login;
    print "Usuário criado! <br>";
  }

  function __destruct() {
    print "<br> Destrutor da subclasse Usuario.";
    parent::__destruct(); // É possível chamar o destruct de Pessoa com o parent.
  }
  // Se este método for excluido, o objeto irá acessar o mesmo método da classe Pessoa
  // já que o nome do método é igual.
  function apresentar() {
    print "@{$this->login}: {$this->nome}, {$this->idade} anos <br>";
    print "@{$this->login}:"; // Dessa forma, terá que usar o parent para usar o restante dos atributos.
    // O parent irá realizar a chamada do método dentro da classe pai (nesse caso Pessoa).
    parent::apresentar();
  }
}

$usuario = new Usuario("Josias Trovão", 28, "jo_trovao");
$usuario->apresentar();
unset($usuario);

