<div class="titulo">Modificador Final</div>

<?php
/**
 * Uma classe abstrata pode ter métodos abstratos;
 * Uma classe abstrata pode ter métodos concretos;
 * Uma classe abstrata pode ter métodos com body e marcadas com final;
 */
abstract class Abstrata {
  abstract public function metodo1();

  final public function metodo2() {
    print "Não vou mudar <br>";
  }
}

class Classe extends Abstrata {
  // Um método abstrato precisa de uma implementação:
  public function metodo1() {
    print "Executando método 1 <br>";
  }
  // Esse método está sobrescrevendo o metodo2 herdado da classe Abstrata;
  // public function metodo2() {
  //   print "Extendendo método 2 <br>";
  // }
}

$classe = new Classe();
$classe->metodo1();
$classe->metodo2();

final class Unica { // Esta classe não poderá ser herdada.
  public $attr = "Valor único";
}

$unica = new Unica();
print $unica->attr;

// Classe final não pode ser herdada.
// class Duplicata extends Unica {
//   public $att2;
// }

/* A palavra reservada final pode ser usada em contextos de segurança e travar
o método ou a classe */