<?php
print 'Carregando: include_once_arquivo <br>';
$variavel = 'Estou definida';
/*
*Usado o if com function_exists para validar a function e não gerar
*a redeclaração da function quando usado o include ou require.
*/
if(function_exists('soma')) {
    function soma($a, $b) 
    {
        return $a + $b;
    }
}