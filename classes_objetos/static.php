<div class="titulo">Membros Estáticos</div>

<?php
class A {
  public $naoStatic = "Variável de instância";
  // Quando dizemos que a variável é static (que ela pertence a uma classe)
  // significa que o valor associado à aquela variável pertence a classe.
  // Ou seja, existe apenas um único valor para aquele tipo de classe.
  public static $static = "Variável de classe {estática}";
  // Normalmente é usado quando se tem constantes.
  // Toda instãncia tem acesso ao atributo static, porém o valor sempre vai
  // ser o mesmo, seja um valor de const ou variável.
  public function mostrarA() {
    print "Não estático: {$this->naoStatic} <br>";
    // Tentativa 1:
    //print "Estático = {$this->static} <br>"; // Como static não pertence a instância, usar o this dessa forma não funciona.
    // Tentativa 2:
    print "Estático = " . self::$static . '<br>'; // Para acessar o membro é preciso usar o self, interpolação não funciona.
  }

  // Um membro de classe não consegue acessar um objeto/instância:
  public static function mostrarStaticA() {
    // print "Não estático = {$this->naoStatic}<br>";
    // print "Estático = {$static} '<br>';
    print print "Estático = " . self::$static . '<br>'; // Usa self tanto para acessar um membro static num objeto ou classe.
  }
}

$objetoA = new A();
$objetoA->mostrarA();
// $objetoA->mostrarStaticA(); // Essa não é a forma de acesso mais interessante, da a impressão que o acesso é pelo objeto.
print '<hr>';
A::mostrarStaticA(); // Já que a function pertence a classe, não é preciso instanciar um objeto.
print '<br>';
print A::$static;

/* O static é como se fosse um const exclusivo de classes, um exemplo é a
* classe Math que possui o static PI = 3.14, toda instância de Math terá
* acesso ao valor de PI sempre no mesmo valor.
*/