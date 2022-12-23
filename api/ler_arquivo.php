<div class="titulo">Ler Arquivo</div>

<?php
// Para ler arquivos, é usado o 'r' de read.
$arquivo = fopen('teste.txt', 'r');
print fread($arquivo, 10); // O valor 10 é de bits, ou seja: 10bits.
print '<br>';
print fread($arquivo, 10);
fclose($arquivo);

print '<hr>';

/*
 * Existe uma estratégia para poder ler o arquivo de uma melhor forma sem 
 * precisar adivinhar a quantidade de bits que usa:
 */

$arquivo = fopen('teste.txt', 'r');
$tamanho = filesize('teste.txt'); // Vai retornar o valor total de bits.
print $tamanho . '<br>';
print fread($arquivo, $tamanho);
fclose($arquivo);

print '<hr>';

$arquivo = fopen('teste.txt', 'r');
print fgets($arquivo) . '<br>'; // Linha 1
print fgets($arquivo) . '<br>'; // Linha 2
print fgets($arquivo) . '<br>'; // Linha 3
var_dump(fgets($arquivo));
fclose($arquivo);

print '<hr>';
/**
 * Aqui irá verificar qual é o final do arquivo, end of file = eof.
 */
$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)) {
    print fgets($arquivo) . '<br>';
}
fclose($arquivo);

// Para ler apenas caracteres:
$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)) {
    print fgetc($arquivo) . '<br>'; // Troca-se o 's' de gets por 'c'.
}
fclose($arquivo);

print '<hr>';

$arquivo = fopen('teste.txt', 'r+'); // o '+' realiza mais leituras.
print fgets($arquivo) . '<br>';
print fgets($arquivo) . '<br>';
fwrite($arquivo, "\nAdicionado durante a leitura");
fclose($arquivo);

print "Fim";


