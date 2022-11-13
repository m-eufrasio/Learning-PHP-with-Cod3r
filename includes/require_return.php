<div class="titulo">Require & Return</div>

<?php
$valorRetorno = require('return_usado.php');
print "$valorRetorno <br>";
// Vou ter acesso a esta variável sem problemas, ela fica disponível;
// Nesse caso é preciso saber o nome da variável para acessar o valor dela.
print "$variavelRetornada <br>"; 
// Esta constante representa a pasta atual, onde o script está.
print __DIR__ . '<br>';
/* 
* Também consigo usar o require ou include em caminhos absolutos.
* Se o arquivo não existir vai dar erro fatal, se for include vai dar valor
* booleano falso.
*/
$valorRetorno2 = require(__DIR__ . '/return_nao_usado.php');// Não tem return.
print "$valorRetorno2 <br>"; // retorna 1 pq o arquivo existe.
print "$variavelRetornada <br>"; 
