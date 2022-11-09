<div class="titulo">Include Função</div>

<?php
print 'Carregando: include_arquivo <br>';

function carregarArquivo()
{
    include('include_arquivo.php');

    print $variavel . '<br>';
    print soma(2, 5) . '!<br>';
}

print 'Novamente no arquivo include_funcao <br>';
// Não é possível acessar soma dessa forma.
//print soma(1, 8) . '!<br>';
carregarArquivo(); // Dessa forma funciona a chamada do include dentro da func.

print "Variável = '{$variavel}'."; // Variável indefinida, está dentro da func.
// Aqui retorna NULL.
//var_dump($variavel);
/*
 * Depois que é declarado o método carregarArquivo, é possível chamar os métodos
 * dentro dele sem barreiras.
 */
print '<br>' . soma(3, 8);