<div class="titulo"> Desafio Operadores Lógicos </div>

<!--
    Dois trabalhos | terça e quinta!
    - Se os dois forem executados -> TV 50' e Sorvete
    - Se apenas um for executado -> TV 32' e Sorvete
    - Se nenhum for executado -> Fica em casa mais saudável!
 -->

<!-- O # da action significa que irá carregar para a própria página. -->
 <form action="#" method="post"> 
    <div>
        <label for="t1">Trabalho 1 (terça-feira):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (quinta-feira):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <button>Executar</button>
 </form>

 <style>
    button, select {
        font-size: 1.8rem;
    }
 </style>

 <?php
// Em php, para saber se uma ação foi executada é da seguinte forma:
print $_POST['t1'] . "<br>";
print $_POST['t2'] . "<br>";

if($_POST['t1'] == 1 and $_POST['t2'] == 1) {
    print "Foi comprado a TV de 50' e sorvete!<br>";
} elseif($_POST['t1'] == 1 and $_POST['t2'] == 0 or $_POST['t1'] == 0 and $_POST['t2'] == 1) {
    print "Foi comprado a TV de 32' e sorvete!<br>";
}else {
    print "Fique em casa que é mais saudável!";
}

/* ** Como o professor resolveu: ** */

// Fazendo essa comparação, vamos validar o resultado (no caso só é possível 1 ou 0).
$t1 = $_POST['t1'] === '1';
// Essa é a outra forma, que converte o resultado para o que de fato ele será convertido.
$t2 = !!$_POST['t2'];
$tv = '';
$sorvete = false;

if($t1 and $t2) {
    $tv = '50"';
} elseif($t1 xor $t2) {
    $tv = '32"';
}

if($t1 or $t2) {
    $sorvete = true;
}

if($tv) {
    $resultado = "Vamos comprar uma TV de $tv";
} else {
    $resultado = "Sem TV dessa vez!";
}

$saudavel = !$sorvete;

if($saudavel) {
    $resultado .= '<br>Estamos mais saudáveis!';
} else {
    $resultado .= '<br>Sorvete liberado >:)';
}

print "<p>$resultado</p>"


 ?>