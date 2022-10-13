<div class="titulo">Primeira Classe</div>

<?php
// Classe sempre começa com a primeira letra maiúscula e em camelCase.
class Cliente {
  // atributos:
  public $nome = "Anônimo"; // public é um modificador de acesso.
  public $idade = 18;

  public function apresentar() {
    print "Nome: $nome";
  }
}

$c1 = new Cliente(); // Instanciando a classe, pode colocar os parênteses ou não.
$c1->apresentar(); // com a flechinha -> acessamos o método.