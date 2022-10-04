<div class="titulo">Função & Escopo</div>

<?php
/* ** É uma sequência de códigos (algoritmo) que irá executar algo específico
e que vc possa usar novamente quando precisar. ** */
function imprimirMensagens() {
    print "Teste <br>";
}

// Pode chamar quantas vezes vc quiser.
imprimirMensagens();

$var = 1;

function trocaValor() {
    $var = 2;
    print "Durante a função $var <br>";
}

print "Antes: $var <br>";
trocaValor(); // Devido ao escopo, o valor será mantido 2 apenas dentro da função.
print "Depois: $var <br>";

function trocaValorDeVerdade() {
    global $var; // Colocando a palavra reservada global, nós conseguidos fazer que a variável seja acessada fora do escopo.
    $var = 3;
    print "Durante a função: $var <br>";
}

print "Antes: $var <br>";
trocaValorDeVerdade();
print "Depois: $var <br>";

var_dump(trocaValorDeVerdade());

/* ** Um algoritmo pode receber dados, processar e ter saida, ou não...** */