<div class="titulo">Desafio dos 7 Erros</div>

<?php
interface Template {
  function metodo1();
  public function metodo2($parametro);
}

abstract class ClasseAbstrata extends Template {
  public function metodo3() {
    print "Estou funcionando";
  }
}

class Classe implements ClasseAbstrata {
  function __construct($parametro) {

  }
}

$exemplo = Classe();
$exemplo.metodo3();
