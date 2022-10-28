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
}

class Classe extends ClasseAbstrata {
  function __construct($parametro) {

    function metodo1() {
      return print "Método 1 acessado";
    }
  
    function metodo2($parametro) {
      return print "Método 2 acessado: $parametro";
    }

  }
}
$exemplo = new Classe;
$exemplo->metodo1();
$exemplo->metodo2("ESSE É O PARAMETRO");
$exemplo->metodo3();
