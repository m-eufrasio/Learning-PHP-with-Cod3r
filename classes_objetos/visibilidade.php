<div class="titulo">Modificadores de Acessos</div>

<?php
class A {
  public $publico = "Público";
  /* Atributos protected pode ser acessado por herança ou function.*/
  protected $protegido = "Protegido";
  private $privado = "Privado";

  public function mostrarA() {
    // É possível acessar functions privates com o $this.
    print "Class A) Público = {$this->publico} <br>";
    print "Class A) Protegido = {$this->protegido} <br>";
    // Quando um conteudo privado está dentro de uma function, ele pode ser acessado e exibido.
    print "Class A) Privado = {$this->privado} <br>";
  }

  protected function vaiPorHenraça() {
    print "Serei transmitido por herança!";
  }
  // Functions privates só fazem sentido existirem se forem chamadas por outra function.
  private function naoMostrar() {
    print "Não vou imprimir!";
  }
}

$a = new A();
$a->mostrarA();

class B extends A {
  public function mostrarB() {
    print "Class B) Publico = {$this->publico} <br>";
    // Nesse caso o intuito de protected é ser transmitido por herança.
    print "Class B) Protegido = {$this->protegido} <br>";
    // O privado não será acessado pois fica na classe onde foi criado.
    print "Class B) Privado = {$this->privado} <br>";
    // Aqui será acessado pois a function foi é protected e passada por herança.
    parent::vaiPorHenraça();
  }
}
print '<br>';
$b = new B();
// Se substituir para mostrarA() irá funcionar também pois B é herança de A.
$b->mostrarB();