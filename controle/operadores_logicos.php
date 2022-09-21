<div class="titulo"> Operadores Lógicos </div>

<?php
var_dump(true);
print "<br>";
var_dump(!true); // not

print "<p class='divisao'>Tabela Verdade 'AND' (E)</p><hr>";
var_dump(true && true); // Da para substituir o && por and.
var_dump(true && false);
var_dump(false && true); // Na programação, se o primeiro é falso, já se sabe que toda a expressão será falsa.
var_dump(false && false);

print "<p class='divisao'>Tabela Verdade 'OR' (OU)</p><hr>";
var_dump(true || true); // Da para substituir o || por or.
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);

print "<p class='divisao'>Tabela Verdade 'OR' (OU)</p><hr>";
var_dump(true xor true); // Da para substituir o xor por !=.
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);

print "<p class='divisao'>Exemplo</p><hr>";
$idade = 65;
$sexo = 'M';
/* Forma alternativa: */
// $pagouPrevidencia = true;
// $podeAposentar = $pagouPrevidencia && (
//     ($idade >= 60 && $sexo === 'M') ||
//     ($idade >= 55 and $sexo === 'F')
// );

$pagouPrevidencia = true;
$criterioHomem = ($idade >= 60 && $sexo === 'M');
$criterioMulher = ($idade >= 55 and $sexo === 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeAposentar = $pagouPrevidencia && $atingiuCriterio;
print "Pode aposentar -> $podeAposentar.<br>";

if($idade >= 60 && $sexo === 'M') {
    print "Pode aposentar $sexo";
} elseif($idade >= 55 and $sexo === 'F') {
    print "Pode aposentar $sexo";
} else {
    print "Terá que trampar mais um poquinho.";
}
?>