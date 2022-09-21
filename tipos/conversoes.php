<div class="titulo">Conversões PHP</div>

<?php
print is_int(PHP_INT_MAX) . '<br>';
print is_int(PHP_INT_MAX + 1) . '<br>'; // Como eu acrescentei um valor a mais do limite INT, esse INT entra no range do FLOAT e o valor se torna tipo FLOAT
var_dump(PHP_INT_MAX + 1);

# Int para float
var_dump((float) 3); // Conversões explícitas são os castings! É o que foi feito nesta linha.

# Float para int
print "<p>Float:</p>";
var_dump((int) 1.5) . '<br>';
var_dump(intval(2.8, 10)); // usando este método, ele irá retornar o valor truncado, o segundo parâmetro é a base, nesse caso é base 10.
var_dump(intval("0101010101", 2)) . '<br>'; // Nessa string, ele converte o que estiver ali dentro (binário), na base 2
var_dump(intval(2.989898)) . '<br>'; // Ele irá arredondar msm assim, sempre para baixo.
var_dump((int) round(2.98)) . '<br>'; // o resultado 3 do tipo float, mas com a conversão fica INT.

# Operações com string
print "<p>Strings:</p>";
var_dump(3 + "2") . '<br>'; // Nesse caso, o php irá somar, ele não concatena com o sinal de +
var_dump("3" + 2) . '<br>'; // O inverso também oferece o mesmo resultado
var_dump("3" . 2) . '<br>'; // Vai caracterizar o tipo como string
var_dump(3 . '2') . '<br>'; // O inverso neste caso, tem preferência para o tipo string independente da ordem.
var_dump(3.2 . '2') . '<br>'; // String está acima do float.
print "!!!" . is_string("3" . 2) . '<br>'; // neste caso é string, pois está sendo concatenado apenas e o tipo string tem prioridade sobre int.
print "!!!" . is_string("3" + 2) . '<br>'; // Irá retornar nada, pois ele não é do tipo string
print "!!!" . var_dump(1 + "cinco") . '<br>';
print var_dump(1 + "5 cinco") . '<br>'; // O php reconhece o começo de uma string se for número, e ele irá somar (neste caso como exemplo).
print var_dump(1 + "5 + 3") . '<br>'; // Neste caso irá pegar somente o primeiro número dentro da string.
print var_dump(1 + "5.2") . '<br>'; // Funciona com float, nesse caso ele pega o valor completo do float
print var_dump(1 + "-3.2e2") . '<br>';
print var_dump((int) "10.5"); // Sempre irá truncar para baixo
print var_dump((float) "10.5");



