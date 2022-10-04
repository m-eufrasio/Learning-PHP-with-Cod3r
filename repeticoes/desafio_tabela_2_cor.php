<div class="titulo">Desafio Tabela 02 - Correção</div>
<table>
    <?php
    $linhas = intval($_POST['linhas']); // o intval transforma o valor em inteiro, se n tiver ele será como string.
    $colunas = intval($_POST['colunas']);

    if(!$linhas) $linhas = 10;
    if(!$colunas) $colunas = 10;

    $num = 1;
    for($i = 0; $i < $linhas; $i++) {
        print '<tr>';
        for($j = 0; $j < $colunas; $j++) {
            print "<td>$num</td>";
            $num++;
        }
        print '</tr>';
    }
    ?>
</table>

<form action="#" method="POST">
    <div>
        <label for="linhas">Linhas</label>
        <!-- Será inserido o value como 10, pois é o valor padrão da tabela. -->
        <input type="number" name="linhas" id="linhas" value="10">
    </div>
    <div>
        <label for="colunas">Colunas</label>
        <input type="number" name="colunas" id="colunas" value="10">
    </div>
    <button>Gerar Tabela</button>
</form>

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