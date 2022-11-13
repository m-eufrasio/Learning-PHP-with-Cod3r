<div class="titulo">Primeira Classe</div>

<?php
// Classe sempre começa com a primeira letra maiúscula e em camelCase.
class Cliente {
  // atributos:
  public $nome = "Anônimo"; // public é um modificador de acesso.
  public $idade = 18;

  public function apresentar() {
    print "Nome: {$this->nome} <br> Idade: {$this->idade} <hr>"; // o this aponta para a instância atual, ela acessa os atributos do objeto.
  }
}

$c1 = new Cliente(); // Instanciando a classe, pode colocar os parênteses ou não.
// É possível passar valores diferentes para cada objeto.
$c1->nome = "Pedro Silva";
$c1->idade = 25;
$c1->apresentar(); // com a flechinha -> acessamos o método.

/* A PARTIR DE UMA CLASSE, PODE CRIAR QUANTOS OBJETOS VC QUISER */
$c2 = new Cliente; // Novo objeto instanciado.
$c2->nome = "Gabriel";
$c2->idade = 43;
$c2->apresentar();

