<div class="titulo">Include Once</div>

<?php
// O once carrega o arquivo uma única vez.
include('include_once_arquivo.php');
// No require da um fatal error devido a function.
//require('include_once_arquivo.php');

print "Variável = '{$variavel}'. <br>";
$variavel = 'Variável alterada';
print "Variável = '{$variavel}'. <br>";
/*
* No próximo exemplo teremos o mesmo problema pois a function não pode ser
* redeclarada, não é o problema do include mas a function não pode ser re 
* declarada
*/
include('include_once_arquivo.php');
print "Variável = '{$variavel}'. <br>";
$variavel = 'Variável alterada';
print "Variável = '{$variavel}'. <br>";
/* 
* Arquivo já foi incluído, logo ele não será carregado novamente. Tendo
* esse fator em vista, não é preciso usar um validador na function para
* não gerar erro de que ela já foi declarada.
*/
include_once('include_once_arquivo.php');
print "Variável = '{$variavel}'. <br>";

require_once('include_once_arquivo.php');
print "Variável = '{$variavel}'. <br>";

/*
* Carregando o arquivo novamente, as variáveis serão redeclaradas
* e as functions também, e isso pode ser evitado usando um if com
* funciton_exists('nomeDaFunction') ou usando o once.
*/
