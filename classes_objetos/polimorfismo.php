<div class="titulo">Polimorfismo</div>

<?php
/* Neste contexto a classe Comida pode ser abstrata pois nenhum momento será
* instanciado.
*/
abstract class Comida 
{
    public $peso;
}

class Arroz extends Comida 
{
    
}

class Feijao extends Comida 
{

}

class Sorvete extends Comida 
{

}

class Pessoa 
{

    public $peso;

    function __construct($peso)
    {
        $this->peso = $peso;
    }
    /* O polimorfismo está aqui, no parâmetro do método, no qual pode ser
    * outro tipo de comida.
    */
    public function comer(Arroz $comida)
    {
        $this->peso += $comida->peso;
    }
}

$c1 = new Arroz();
$c1->peso = 0.65;
$p = new Pessoa(86.45);
$p->comer($c1);
print $p->peso;
