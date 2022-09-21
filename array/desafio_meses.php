<div class="titulo"> Desafio Meses </div>

<?php

// No PHP o 'recebe' com arrays é usando flecha dupla.
$meses = array(
  1 => "Janeiro",
  "Fevereiro",
  "Março",
  "Abril",
  "Maio",
  "Junho",
  "Julho",
  "Agosto",
  "Setembro",
  "Outubro",
  "Novembro",
  "Dezembro",
);

// Basta mudar o primeiro índice dos elementos que o índice irá 'startar' a partir dele.

print_r($meses);
print '<br>' . $meses[7];