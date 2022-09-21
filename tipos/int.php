<div class="titulo">Tipo Inteiro</div>

<?php

echo 11;
print '<br>';

// O var_dump fornece algumas informações da variável e o tipo da variável.
var_dump(11);

// Esse código php exibe a capacidade máxima de um número int a ser mostrado, isso depende se sua máquina é 32bits ou 64bits
print PHP_INT_MAX . '<br>';
print PHP_INT_MIN . '<br>';
// Com o 0 na frente do número inteiro significa que o número é do tipo octal
print 017 . '<br>';

// Com o 0b na frente do número inteiro significa que o número é do tipo binário
print 0b1100101010 . '<br>';

// Com o 0x na frente do número inteiro significa que o número é do tipo hexadecimal
print 0x117acf0;