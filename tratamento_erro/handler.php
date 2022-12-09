<div class="titulo">Error Handler</div>

<?php
ini_set('display_errors', 1);
print 4 / 0 . '<br>';
/* 
* é possível não exibir a advertência usando error_reporting que não reporta
* aquilo que tem um nível de criticidade menor;
*/
error_reporting(E_ERROR);
print 4 / 0 . '<br>';

error_reporting(E_ALL);
print 4 / 0 . '<br>';
// Operação bit a bit, usando ele significa que não irá exibir nada, pois é a negação;
error_reporting(~E_ALL);
print 4 / 0 . '<br>';

print '<hr>';

error_reporting(E_ALL);
print 4 / 0 . '<br>';
include 'arquivo_inexistente.php';

function filtrarMensagem($errno, $errstring) {
    $text = 'include';
    return !!stripos(" $errstring", $text);
}

set_error_handler('filtraMensagem', E_WARNING);

print '<hr>';

/* Você pode controlar aquilo que será reportado a partir do error_reporting,
* tem como habilitar para que os erros sejam exibidos com ini-set, com
* esses métodos é possível auxiliar o desenvolvedor a controlar os erros;
=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
set_error_handler — Define uma função do usuário para manipular erros
*/

