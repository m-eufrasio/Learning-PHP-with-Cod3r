<div class="titulo">Desafio Impressão</div>

<?php
$array = [
  "AAA",
  "BBB",
  "CCC",
  "DDD",
  "EEE",
  "FFF"
];

/* ** COM FOR ** */
for($i = 0; $i < count($array); $i++) {
  if($i % 2 == 0) {
    print "$array[$i] <br>";
  }
}
print '<hr>';

/* ** COM FOREACH ** */
foreach($array as $key => $valor) {
  if($key % 2 == 0) {
    print $valor . '<br>';
  }
}

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
/* ** CORREÇÃO ** */

/* ** COM FOR ** */
for($i = 0; $i < count($array); $i++) {
  if($i % 2 == 0) continue;
  print "$array[$i] <br>";
}
print '<hr>';

/* ** COM FOREACH ** */
foreach($array as $key => $value) {
  if($key % 2 == 0) continue;
  print $value . '<br>';
}