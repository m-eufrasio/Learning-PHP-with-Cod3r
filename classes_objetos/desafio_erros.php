<div class="titulo">Desafio dos 7 Erros</div>

<?php
interface Template {
  function metodo1();
  public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template {
  public function metodo3() {
    print "Estou funcionando";
  }

  function metodo1() {
  }

  public function metodo2($parametro){

  }
}

class Classe extends ClasseAbstrata {
  function __construct($parametro = "ESSE É O PARAMETRO") {

    function metodo3() {
      print "Estou funcionando";
    }

    function metodo1() {
      print "Método 1 acessado";
    }
  
    function metodo2($parametro) {
      print "Método 2 acessado: $parametro";
    }

  }
}
$exemplo = new Classe;
$exemplo->metodo1();
$exemplo->metodo2("ESSE É O PARAMETRO");
$exemplo->metodo3();
print '<hr>';
/* CORREÇÃO DO EXERCÍCIO */
interface Template2 {
  function metodo11();
  public function metodo22($parametro);
}

abstract class ClasseAbstrata2 implements Template2 { // Uma classe sempre irá IMPLEMENTAR e não extender uma interface (abstrata ou não);

  function metodo33() {
    print "Estou funcionando";
  }
  // Herdado uma classe, é preciso replicar os métodos!
  function metodo11() { // É preciso inserir o body, mas não precisa ter conteúdo.
  
  }
}

class Classe2 extends ClasseAbstrata2 { // Uma classe sempre irá EXTENDER outra classe (abstrata ou não);
  function __construct($parametro) {

  }

  public function metodo22($parametro) {

  }
}
// O construtor desta classe recebe um parâmetro, logo é preciso passar esse parámetro;
$exemplo = new Classe2('...'); // Como o parâmetro não está sendo usado, pode passar qualquer coisa;
$exemplo->metodo33(); // Para acessar o método da classe é usado a ->;

