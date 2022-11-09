<div class="titulo">Include</div>

<?php
print "Executei esta linha do arquivo include <br>";
/**
 * Não é possivel chamar o mesmo include duas vezes quando eu uso um método de
 * um arquivo mais de uma vez, neste arquivo estou chamando o method soma sendo
 * que ele está em outro arquivo, logo não posso usar o mesmo include novamente.
 */
include('include_arquivo.php');

print soma(3, 5) . '<br>';
print "Exibindo o conteúdo da variável: '{$variavel}'.";