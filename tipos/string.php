<div class="titulo">Tipo String</div>

<?php
print 'Eu sou uma string!';
print '<br>';
var_dump("Eu também!"); // O padrão é UTF-8 o string length não se dá muito bem com o UTF e nesse caso o acento é considerado na conta, ou seja, ele soma na hora de ver a distância da string
print '<br>';

# Concatenação
print "Nós também" . ' somos'; // Nesse exemplo não faz diferença usar aspas simples ou duplas!
print '<br>';

print "'Teste' " . '"teste" '; // Usando aspas simples e duplas uma dentro da outra
print "\"Teste\" " . "\\"; // o escape é o uso das barras para poder imprimir as aspas sem que sejam consideradas string, a própria barra também é feita possível

# Algumas funções das strings

print '<br>' . strtoupper("maximizado"); // str de string, upper para deixar as letras maiúsculas.
print '<br>' . strtolower("MINIMIZADO"); // lower para deixar as letras minúsculas.
print '<br>' . ucfirst('só a primeira letra'); // ucfirst só a primeira letra fica maiúscula.
print '<br>' . ucwords('só a primeira letra'); // ucwords todas as primeiras letras de cada palavra será maiúscula.
print '<br>' . strlen('Quantas letras?'); // ucwords todas as primeiras letras de cada palavra será maiúscula.
print '<br>' . mb_strlen('Eu também!'); // mb não considera o acento como um espaço a ser contabilizado.
print '<br>' . mb_strlen('Eu também!', 'utf-8'); // Se quiser passar o segundo parâmetro do mb também irá funcionar, que no caso é o encode.
print '<br>' . substr("Só uma parte mesmo", 7, 6); // o segundo parâmetro é onde o cursor vai começar a ler, e o terceiro é a quantidade que ele vai ler.
print '<br>' . str_replace("isso", "aquilo", "Trocar isso"); // O primeiro parâmetro é o que vai ser procurado, o segundo é o que vai substituir, o terceiro é onde vai substituir
print '<br>' . strlen("vidã"); // sem ser o encode, ele considera o caracter normalmente
print '<br>' . mb_strlen("vi^da"); // inserindo o caracter sozinho num espaço, usando o enconde, ele é contabilizado também. Resultado = 5