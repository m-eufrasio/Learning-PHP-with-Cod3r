<div class="titulo"> Desafio Switch </div>

<!-- Se no action for colocado /, ele irá para a pasta raiz da aplicação; -->
<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">kM > Milha</option>
        <option value="milha-km">Milha > kM</option>
        <option value="m-km">m > kM</option>
        <option value="km-m">kM > m</option>
    </select>
    <!-- Colocando o button dentro de um form, automaticamente ele irá se tornar um submit. -->
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>
<?php
// O POST ou GET sempre irão pegar o name do HTML!
$resultado = $_POST['param'] . '<br>';
$select = $_POST['conversao'];
$milhas = 1.609;
$kmEmMilhas = 0.6214;
$conversao = 0;
switch($select) {
    // Para selecionar o value de algum option do select, pegamos via POST ou GET o select e dps inserimos
    // nos cases os values em aspas.
    case "km-milha":
        $conversao = $resultado / $milhas;
        print number_format($conversao, 2, '.', ',') . "milhas";
        break;
    case "milha-km":
        $conversao = $resultado / $kmEmMilhas;
        print number_format($conversao, 2, '.', ',') . "kM";
        break;
    case "m-km":
        $conversao = $resultado / 1000; // Nesse caso é 1000m
        print number_format($conversao, 2, '.', ',') . "kM";
        break;
    case "km-m":
        $conversao = $resultado * 1000;
        print number_format($conversao, 2) . "m";
        break;
}
?>