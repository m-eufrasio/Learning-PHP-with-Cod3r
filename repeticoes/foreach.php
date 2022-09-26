<div class="titulo">Foreach</div>

<?php
$array = ["domingo", "segunda", "terça", "quarta", "quinta", "sexta", "sabado"];

// Primeiro exemplo, percorrendo todo o array.
foreach($array as $dia) {
    print "$dia <br>";
}
// Segundo exemplo, percorrendo todo o array, porém atribuindo a chave de cada valor do array. 
foreach($array as $indice => $dia) {
    print "$indice => $dia <br>";
}
// Terceiro exemplo, percorrendo um array multidimensional.
$matriz = [
    ['a', 'e', 'i', 'o', 'u'],
    ['x', 'y', 'z']
];

foreach($matriz as $linha) { // Primeiro foreach para poder acessar qual array da matriz.
    foreach($linha as $letra) { // Segundo para acessar os elementos de cada array.
        print "$letra "; // Espaço no final para ter a separação das letras.
    }
    print "<br>"; // Quebra entre os dois arrays para não ficarem grudados.
}

// Quarto exemplo, usando array e foreach com referência de memória.
$numeros = [1, 2, 3, 4, 5];
foreach($numeros as &$dobrar) { // Usando referência ocorre uma modificação direto no array.
    $dobrar *= 2;
    print "$dobrar <br>";
}
print_r($numeros);
// Pegando a referência do valor, você estará alterando o valor em si através desse for acima.
// Caso não fosse assim, seria por valor e não por referência de memória.