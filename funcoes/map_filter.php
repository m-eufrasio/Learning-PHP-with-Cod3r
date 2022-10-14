<div class="titulo">Map & Filter</div>

<?php
$notas = [5.8, 7.3, 9.8, 6.7];
$notasFinais1 = [];

foreach($notas as $nota) {
    $notasFinais1[] = round($nota);
}
// É a mesma lógica usando o map.
print_r($notasFinais1);
print '<br>';

// USANDO O MAP DE FATO:
$notasFinais2 = array_map(@round, $notas); // round serve como função de primeiro parâmetro para o map.
print_r($notasFinais2);

// Usando filter sem usar a function em si:

$apenasOsAprovados1 = [];
foreach($notas as $nota) {
    if($nota >= 7) {
        $apenasOsAprovados1[] = $nota;
    }
}

print '<br>';
print_r($apenasOsAprovados1); // O resultado irá imprimir apenas valores arredondados que estão na média.

// USANDO O FILTER:
function aprovados($nota) {
    return $nota >= 7;
}

print '<br>';
$apenasOsAprovados2 = array_filter($notas, @aprovados);
print_r($apenasOsAprovados2);

/* ** A function aprovados pode ser usada em outras lógicas do seu projeto. ** */

function calculoLegal($nota) {
    $notaFinal = round($nota) + 1; // Vai arredondar e somar um ponto.
    return $notaFinal > 10 ? 10 : $notaFinal; // Caso passe de 10, será tratado nesse ternário.
}

print '<br>';
$notasFinais3 = array_map(@calculoLegal, $notas); // o map sempre recebe primeiro a function dps o array.
print_r($notasFinais3);

/* ** Essas funções (map e filter) sempre retornam um array novo ** */
