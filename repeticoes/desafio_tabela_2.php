<div class="titulo">Desafio tabela 02</div>

<?php
$linhas = $_POST['linhas'];
$colunas = $_POST['colunas'];
$contador = 5;
?>

<form action="#" method="POST">
    Linhas:<input type="text" name="linhas"><br>
    Colunas:<input type="text" name="colunas"><br>
    <button>Enviar</button>
</form>

<table>
    <?php 
        for($i = 0; $i < $linhas; $i++) {
            print '<tr>';
            for($j = 0; $j < $colunas; $j++) {
                print "<td>$j</td>";
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
</style>