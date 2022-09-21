<div class="titulo">Switch</div>

<?php
$categoria  = 'Luxo';
$preco = 0.0;
$carro = '';

if($categoria === 'Luxo') {
    $carro = 'Mercedes';
    $preco = 250000;
} else if($categoria === 'SUV') {
    $carro = 'Renegade';
    $preco = 80000;
} elseif($categoria === 'Sedan') {
    $carro = 'Etios';
    $preco = 55000;
} else {
    $carro = 'Mobi';
    $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ',', '.');
print "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";

$categoria = '???'; // Como não foi especificado o case, entrará no valor default.
// Para evitar problemas de a categoria receber em letra maiuscula ou minuscula
// é usado o strtolower() para ajustar isso.
switch(strtolower($categoria)) {
    // É possível usar chaves nos cases, mas não é preciso. Apenas o bloco do switch
    // e não do case.
    case 'Luxo':
        $carro = 'Mercedes';
        $preco = 250000;
        break; // O break existe aqui justamente para quebrar o case, caso contrário
        // ele iria para o proximo case e iria executá-lo.
    case 'SUV':
    case 'SUV basico':
        $carro = 'Renegade';
        $preco = 80000;
        break;
    case 'Sedan':
        $carro = 'Etios';
        $preco = 55000;
        break;
    case 'Etios':
        $carro = 'Mobi';
        $preco = 33000;
        break;
    default: // Caso os cases não sejam atendidos, por padrão terá valores default.
        $carro = 'Gol G2';
        $preco = 7000;
}

$precoFormatado = number_format($preco, 2, ',', '.');
print "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";

