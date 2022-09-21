<div class="titulo"> Desafio Switch </div>

<!-- Se no action for colocado /, ele irá para a pasta raiz da aplicação; -->
<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">kM > Milha</option>
        <option value="milha-km">Milha > kM</option>
        <option value="m-km">m > kM</option>
        <option value="km-m">kM > m</option>
        <option value="celcius-fahrenheit">°Celcius > °Fahrenheit</option>
        <option value="fahrenheit-celcius">°Fahrenheit > °Celcius</option>
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
/*
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
}*/

/* ** CORREÇÃO ** */
const FATOR_KM_MILHA = 0.621371; // É uma conversão criar constantes em letras maiúsculas.
const FATOR_METRO_KM = 1000;
const FATOR_CELCIUS_FAHRENHEIT = 32;

$param = $_POST['param'] ?? 0;
switch($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        print $mensagem = "$param Km = $distancia Milhas";
        break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        print $mensagem = "$param Milhas = $distancia Km";
        break;
    case 'metro-km':
        $distancia = $param / FATOR_METRO_KM;
        print $mensagem = "$param metros = $distancia Km";
        break;
    case 'km-metro':
        $distancia = $param * FATOR_METRO_KM;
        print $mensagem = "$param Km = $distancia metros";
        break;
    case 'celcius-fahrenheit':
        $temperatura = ($param * 1.8) + FATOR_CELCIUS_FAHRENHEIT;
        print $mensagem = "$param °C = $temperatura °F";
        break;
    case 'fahrenheit-celcius':
        $temperatura = ($param - FATOR_CELCIUS_FAHRENHEIT) * 0.55;
        print $mensagem = "$param °F = $temperatura °C";
        break;
    default:
        print $mensagem = "Nenhum valor calculado!";
}

?>