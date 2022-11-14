<div class="titulo">Include vs Require</div>

<?php
// Esta função mostra os erros e os warnings.
ini_set('display_errors', 1);

print "Usando include com arquivo inexistente...<br>";
// O include gera WARNINGS e não FATAL ERROR.
include('arquivo_inexistente.php');

print "Usando require com arquivo inexistente...<br>";
require('arquivo_inexistente.php');

print "Não achou mesmo... <br>"; 

/**
 * Via de regra vc gostaria de ser notificado quando um arquivo não existe
 * logo a aplicação irá parar e vc irá corrigir o erro, levando em conside
 * ração isso, o require é a melhor opção.
 * Com ele o php para a renderização e vc pode tratar o erro, caso não seja
 * use o include.
 */

