<div class="titulo">Operador Ternário</div>

<?php
$idade = 70;
$status;

if($idade >= 18) {
    $status = "Maior de idade";
} else {
    $status = "Menor de idade";
}

print "$status<br>";

// Se eu colocar o novo valor a variável idade, perceba que entrará no else do ternário.
$idade = 17;
// Esse é o mesmo if de cima em forma de ternário (3 operandos).
$status = $idade >= 18 ? 'Maior de idade' : 'Menor de idade';
print "$status<br>";

// É possível inserir um ternário dentro de outro, porém não fica muito legível.
// e não é muito recomendado.
$status = $idade >= 18 ? $idade >= 65 ? 'Aposentado' : 'Maior de idade': 'Menor de idade';