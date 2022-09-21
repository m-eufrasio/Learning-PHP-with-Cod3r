<div class="titulo">Desafio String</div>

<?php
/* Enunciado: 
Avaliando os métodos da documentação da string, qual o método(s) que a posição do texto 'abc' na string '!AbcaBcabc' retorne 1 */

$str = stripos('!AbcaBcabc', 'abc');
// o método strpos retorna o índice do primeiro elementos que é passado no segundo parâmetro para ser encontrado independente se é minúsculo ou maiúsculo
// esse i antes do pos no método stripos() é de ignore, ou seja, ele ignora o case-sensitive
print $str;
var_dump($str);

// outra opção seria user o strtolower:

print strpos(strtolower('!AbcaBcabc'), "abc");