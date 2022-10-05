<div class="titulo">Desafio Palíndromo</div>

<form action="#" method="POST">
    <label for="">Digite alguma palavra</label>
    <input type="text" placeholder="palavra" name="palavra" style="padding: 0.4em">
    <button>Verificar</button>
</form>

<?php
$palavra = $_POST['palavra'];

if($palavra === strrev($palavra)) { // sttrev inverte uma string!
    print "É palíndromo! <br>";
} else {
    print "Não é Palíndromo <br>";
}
?>

<!-- USANDO FUNCTION -->

<?php
function palindromo($palavra) {
// Iremos pegar o último índice da palavra.
    $ultimoIndice = strlen($palavra) - 1; // strlen pega o tamanho da string, -1 vai para a última posição.
    for($i = 0; $i <= $ultimoIndice; $i++) {
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return "Não";
        }
    }
    return "Sim!";
}
print palindromo('arara') . '<br>';
print palindromo('teste') . '<br>';
print '<br>';

/* ** USANDO OUTRA FUNCTION MAIS RESUDIZA E COM TERNÁRIO ** */

function palindromoSimples($palavra) {
    return $palavra === strrev($palavra) ? 'Sim': 'Não';    
}

print palindromoSimples('ana') . '<br>';
print palindromoSimples('bola') . '<br>';
?>