<?php
print "Carregando: include_arquivo <br>";

$variavel = "Estou definida";
// A condição irá dizer se, caso a função não exista, ela será ativada e usada.
if(!function_exists('soma')) { // o parâmetro precisa ser dentro de aspas.
    function soma($a, $b)
    {
        return $a + $b;
    }
}

/**
 * a função function_exists() valida uam function.
 */