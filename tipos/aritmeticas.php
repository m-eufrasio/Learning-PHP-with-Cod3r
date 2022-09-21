<div class="titulo">Aritméticas</div>

<?php
print 1 + 1 . '<br>';
var_dump(1 + 1.2); // O valor float possui prioridade nesse caso, por ter mais possibilidades de valores precisos. No var_dump o cálculo será exibido como float
print '<br>';
// Assim como na matemática, o PHP respeita a ordem de procedência da progressão.
print 1 + 2.5 . '<br>';
print 10 - 2 . '<br>';
print 2 * 5 . '<br>';
print 7 / 4 . '<br>';
print intdiv(7, 4) . '<br>'; // Usando essa function, ele vai calcular o valor, mas o resultado será truncado.
print round(7 / 4) . '<br>';
print 7 % 4 . '<br>'; // O resultado sempre será o resto da divisão
print 7 / 0 . '<br>'; // Divisão por 0 sempre dará um valor infinito, porém no PHP é exibido outra coisa...
# print intdiv(7, 0) . '<br>'; // Erro
print 4 ** 2 . '<br>';

# Precedência de operadores:
// () => ** => / * % => + - 
print '<p>Precedência:</p>';
print 2 + 3 * 4 . '<br>';
print (2 + 3) * 4 . '<br>';
print 2 + 3 * 4 ** 2 . '<br>';
print ((2 + 3) * 4) ** 2 . '<br>';