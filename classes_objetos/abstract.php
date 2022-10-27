<div class="titulo">Classe Abstrata</div>

<?php
// A palavra reservada abstract serve para aplicar em classes é métodos.
abstract class Abstrata { // Marcada como abstrata ela não pode ser instanciada.
  // O real uso de uma classe abstrata é para ter classes filhas.
    public abstract function metodo1(); // public pd ir antes de abstract se quiser.
    // Chaves representam corpo e uma das caracteristicas da classe abstrata é não ter corpo.
    abstract protected function metodo2($parametro);
}
// É possível uma classe abstrata filha herdar da mãe.
abstract class FilhaAbstrata extends Abstrata {
  public function metodo1() { // Não precisa declarar o abstract novamente quando for chamar o método.
    print "Executando método 1 da classe mãe <br>";
  }

  public abstract function metodo3();
}
// Para usar de fato os métodos, é preciso de uma classe concreta.
class Concreta extends FilhaAbstrata {
  // Aqui está sobreescrevendo o método da classe mãe Abstrata.
  public function metodo1() {
    print "Executando método 1 extendido <br>";
    // Aqui está acessando o método original da classe mãe Abstrata
    parent::metodo1();
  }

  protected function metodo2($parametro) {
    print "Executando método 2, com parâmetro $parametro pois é protected<br>";
  }

  public function metodo3() {
    print "Executando método 3 <br>";
    $this->metodo2('Interno');
  }
}

$c = new Concreta();
$c->metodo1();
//$c->metodo2('externo');
$c->metodo3(); // Um método pode acessar outro, logo o 3 acessa o 2.
print "Fim";

/* É praticamente uma regra que na hierarquia de que as classes acima são
* mais genéricas e as que herdam são mais específicas.
*/