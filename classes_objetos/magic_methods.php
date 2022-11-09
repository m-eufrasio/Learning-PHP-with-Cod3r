<div class="titulo">Métodos Mágicos</div>

<?php
/*
* Tudo que possui dois underscore seguido com o nome é um método mágico,
* eles são métodos únicos do PHP usados nas classes.
*/
class Pessoa
{

    public $nome;
    public $idade;

    function __construct($nome, $idade) 
    {
        print "Construtor invocado!<br>";
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct()
    {
        print "E morreu!";
    }
    // Método que converte para string.
    public function __toString() 
    {
        return "{$this->nome} tem {$this->idade} anos.";
    }

    function apresentar() {
        /* Usando apenas o this neste método, ele irá entender que é uma string
        * pois está passando pela conversão pelo __toString().
        */
        print $this . "<br>";
    }
    /* Esse método lê atributos inexistentes ou inacessíveis (protegidos
    *ou privados).
    */
    function __get($atrib)
    {
        print "Lendo atributo não declarado: {$atrib}<br>";
    }

    function __set($atrib2, $valor) 
    {
        print "Alterando atributos não declarados {$atrib2}/{$valor}";
    }
    // Esse método verificad quando vc chama um método num objeto que não existe.
    function __call($metodo, $params)
    {
        print "Tentando executar método ${metodo}.";
        print_r($params);
    }
}

$pessoa = new Pessoa("Ricardo", 28);
$pessoa->apresentar(); // chamando o __toString().
print $pessoa . '<br>';
$pessoa->nome = "Ronaldo"; // chamando o __toString().
$pessoa->apresentar(); // chamando o __toString().
// nomeCompleto é um atributo não declarado usado de exemplo com o __get() e __set().
var_dump($pessoa->nomeCompleto); // nomeCompleto está atrelado ao $atrib.
$pessoa->nomeCompleto2; // Atrelado ao $atrib2.
print '<hr>';
// __call pq o método não existe no objeto.
$pessoa->exec(1, 'teste', true, [1, 2, 3]); // Devolve um array com esses valores.
// Para lembrar, dessa forma chama o destrutor, ou usando o unset().
$pessoa = null;

/*
* Os métodos mágicos são um tanto pesados, então devem ser usados com
* sabedoria em momentos específicos. As vezes um framework usa.
*/