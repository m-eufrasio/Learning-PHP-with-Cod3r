<div class="titulo">Argumentos e Retorno</div>

<?php
// É um algoritmo que não recebe nenhuma entrada, mas processa e retorna algo.
function obterMensagem() {
    return 'Seja bem vindo(a)';
}

obterMensagem(); // Sem um print ou echo a mensagem não será exibida, mas a function funciona!
$m = obterMensagem();
print $m;
print '<br>'. obterMensagem();
var_dump(obterMensagem());

// Function com parâmetro:
function obterMensagemComNome($nome) {
    return "Bem vindo, {$nome}";
}
print '<br>'. obterMensagemComNome('Matheus');

// Function com operação aritimética:
function soma($a, $b) {
    return $a + $b;
}

$x = 13;
$y = 57;
print '<br>'. soma(4, 5);
print '<br>'. soma($x, $y);

// Exemplo de function que usa valores e não referência:
function trocarValor($a, $novoValor) {
    $a = $novoValor;
}

$variavel = 1;
trocarValor($variavel, 3);
print '<br>'. $variavel; // O resultado será 1, o php cria copia e não faz referência (neste caso).

// Exemplo de function que usa referência e não cópia:
function trocarValorDeVerdade(&$a, $novoValor) { // O parâmetro $a vai receber um endereço e não copia.
    $a = $novoValor;
    // Por referência, é possível que a function consiga mudar algo fora dela, como o valor de uma variável.
    // Um exemplo parecido é usando o global, mas ele depende do nome da variável.
}
trocarValorDeVerdade($variavel, 5);
print '<br>'. $variavel;



