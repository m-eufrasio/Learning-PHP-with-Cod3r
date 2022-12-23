<div class="titulo">Escrever Arquivo</div>
Aperte F5 e veja nos arquivos do projeto as mudanças no arquivo teste.txt

<?php
// Irá criar um arquivo dentro da estrutura de pastas.
$arquivo = fopen('teste.txt', 'w'); // o 'w' é de write, escrita.
fwrite($arquivo, "Valor inicial\n");
$str = "Segunda linha\n"; // Acrescentando a segunda linha.
fwrite($arquivo, $str);
fclose($arquivo); // Realizando o que vc precisa, o fclose() fecha o arquivo.

// Em casos de sobreescrita:
$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Novo conteúdo\n");
fclose($arquivo);

// Usando appending:
$arquivo = fopen('teste.txt', 'a');
fwrite($arquivo, "Usando appending\n");
fwrite($arquivo, "Adicionando em um segundo momento");
fclose($arquivo);

/*
 * Você irá usar a flag 'x' quando quer garantir que o arquivo em questão
 * não existe.
 * Pode gerar mais segurança e garante que não irá, por acidente, apagar algum
 * arquivo importante.
*/
ini_set('display_errors', 1);
$arquivo = fopen('teste.txt', 'x');

/*
 * Quando é criado o arquivo, as linhas são mantidas e não são sobreescritas
 * quando é gerado esse código novamente, também não é criado um novo arquivo
 * que substitui o existente.
 */