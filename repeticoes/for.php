<div class="titulo">Laço For</div>

<?php
for($cont = 1; $cont <= 5; $cont++) {
    print "$cont <br>";
}
print '<hr>';
// Quando termina o for de cima (resultado 6) começa o de baixo.
for(; $cont <= 10; $cont++) { // Não necessáriamente é preciso alimentar todos os parâmetros.
    print "$cont <br>";
}
print '<hr>';

for(; $cont <= 15; ) { 
    print "$cont <br>";
    $cont++; // Nesse caso não tem motivo para colocar dentro do bloco.
}
print '<hr>';

$array = ["domingo", "segunda", "terça", "quarta", "quinta", "sexta", "sabado"];
print_r($array);
print '<hr>';
for($i = 0; $i < count($array); $i++) { // O array possui 7 elementos, mas o maior index é 6.
    print "{$array[$i]} <br>";
}
print '<hr>';
$matriz = [
    ['a', 'e', 'i', 'o', 'u'],
    ['x', 'y', 'z']
];
// O primeiro for irá percorrer o index dos arrays.
for($i = 0; $i < count($matriz); $i++) {
    // Segundo for para exibir os elementos dos arrays percorrendo os seus index.
    for($j = 0; $j < count($matriz[$i]); $j++) {
        print "{$matriz[$i][$j]} "; // Esse espaço depois das chaves é para separar cada elemento do array.
    }
    print '<br>'; // Quando for para o outros for ele irá quebrar a linha.
}
