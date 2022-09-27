<div class="titulo">While</div>

<?php
const VALOR_LIMITE = 5;
$contador = 0;

while($contador < VALOR_LIMITE) {
  print "while $contador <br>";
  $contador++;
}

// Primeiro ele executa a expressão e depois verifica se deve continuar.
do {
  print "do while $contador <br>";
  $contador++;
} while($contador < VALOR_LIMITE); // É a única estrutura que possui ponto e vírgula;

// Mesma coisa é no for, porém é preciso dos ; para separar os parâmetros
// certos indicando o seu papel no for.
$contador = 0;
for(; $contador < VALOR_LIMITE;) {
  print "for $contador <br>";
  $contador++;
}

// Pode colocar tudo no for.
// for($contador = 0; $contador < VALOR_LIMITE; $contador++) {
//   print "for $contador <br>";
//   $contador++;
// }

$contador = 100; // Se o primeiro valor já for falso, ele executa pelo menos uma vez.
do {
  print "do while $contador <br>";
  $contador++;
} while($contador < VALOR_LIMITE);

$contador = 0;
while(true) { // Garante um laço infinito no while.
  print "while(true) $contador <br>";
  $contador++;
} while($contador < VALOR_LIMITE) break;