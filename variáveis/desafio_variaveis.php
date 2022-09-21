<div class="titulo">Desafio Variáveis</div>

<?php
$a = 'Nossa';
$Nossa = 'Eu';
$Eu = 'consegui';
$consegui = 'responder';
$responder = 'este';
$este = 'desafio';

print "Nossa! Eu consegui responder este desafio.";

// Apenas pode usar a variável $a
print '<br>';
print "$a! {$$a} {$$$a} {$$$$a} ${$$$$a} ${$$$$$a}."; // Se eu inserir mais um dolar como string, não irá funcionar! '$${$$$$a}'