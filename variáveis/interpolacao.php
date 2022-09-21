<div class="titulo">Interpolação PHP</div>

<!-- Interpolação é a junção de variáveis com strings. Também é apresentado a diferença entre aspas simples e duplas; -->

<?php
$numero = 10;
print $numero;
print '<br> $numero'; // Com aspas simples, dessa forma a variável dentro será interpretada como string.
print "<br> $numero"; // Com aspas duplas, a variável será lida normalmente e será exibido os eu valor.

$texto = "A sua nota é: $numero";
print "<br>$texto"; // Concatena sem precisar usar o ponto!

$objeto = 'caneta';
print "<br> Eu tenho 5 $objetos"; // Note que o nome da variável está errada.
print "<br> Eu tenho 5 {$objeto}s"; // Para usar o plural numa variável, use {} como no exemplo.
print "<br> Eu tenho 5 { $objeto}s mas perdi 3 {$objeto }s"; //O espaço inicial não funciona, já no final sim. 
print "<br> $numero + 10"; // Não é possível realizar cálculos com interpolação. 



