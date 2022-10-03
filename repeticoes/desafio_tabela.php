<div class="titulo">Desafio Tabela #01</div>

<?php
$matriz = [
  ['01', '02', '03', '04', '05'],
  ['06', '07', '08', '09', '10'],
  ['11', '12', '13', '14', '15'],
  ['16', '17', '18', '19', '20']
];

foreach($matriz as $linha) {
  foreach($linha as $valor) {
    print "$valor ";
  }
  print '<br>';
}
?>
<!-- Tomar cuidado com a ordem, no caso código php sempre estará em cima e
html dps. Pois é interpretado então é linha por linha, caso contrário dará
erro. -->
<table>
  <?php foreach($matriz as $elementos): ?>
    <tr>
      <td class="blue"><?= $elementos[0] ?></td>
      <td><?= $elementos[1] ?></td>
      <td class="blue"><?= $elementos[2] ?></td>
      <td><?= $elementos[3] ?></td>
      <td class="blue"><?= $elementos[4] ?></td>
    </tr>
  <?php endforeach ?>
</table>

<!-- CORREÇÃO DO EXERCÍCIO -->
<table>
  <?php
    foreach($matriz as $linha) {
      print '<tr>';
      foreach($linha as $valor) {
        print "<td>$valor</td>";
      }
      print '</tr>';
    }
  ?>
</table>

<table>
  <?php
    foreach($matriz as $index => $linha) {
      $style = $index % 2 === 0 ? 'background-color: lightblue': '';
      print "<tr style='{$style}'>";
      foreach($linha as $valor) {
        print "<td>$valor</td>";
      }
      print '</tr>';
    }
  ?>
</table>

<style>
  table {
    border: 1px solid #444;
    border-collapse: collapse;
    margin: 20px 0px;
  }

  table tr {
    border: 1px solid #444;
  }

  table td {
    padding: 10px 20px;
  }

  .blue {
    background-color: lightblue;
  }
</style>