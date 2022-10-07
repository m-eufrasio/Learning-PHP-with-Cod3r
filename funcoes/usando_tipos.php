<div class="titulo">Usando Tipos</div>

<?php
function somar1($a, $b) {
  print "<span>Somando $a + $b = </span>";
  return $a + $b;
}

print somar1(1, 2) . '<br>';
print somar1(1.7, 2.5) . '<br>';
// Isso irá funcionar, pois no php ele identifica números dentro da string,
// apenas a palavra 'dois' não será considerada. 
print somar1(1, '4dois') . '<br>'; // irá dar um warning msm assim.

// A grande jogada é que em function vc pode declara o tipo do parâmetro.
function somar2(int $a, int $b) {
  print "<span>Somando $a + $b = </span>";
  return $a + $b;
}

print somar2(1, 2) . '<br>'; // Nesse caso irá funcionar normalmente pois os valores são int.
print somar2(1.7, 2.5) . '<br>'; //  Aqui os valore NÃO serão truncados. (antes sim).
//print somar2(1, '4dois') . '<br>'; // 
// Os valores serão convertidos após gerar a resposta:
function somar3($a, $b): int {
  print "<span>Somando $a + $b = </span>";
  return $a + $b; // Aqui é convertido.
} 

print somar3(1, 2) . '<br>';
print somar3(1.7, 2.5) . '<br>'; 
print somar3(1, '4dois') . '<br>';  
