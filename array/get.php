<div class="titulo">$_GET</div>

<?php
/* ** Tanto o GET quanto o POST como variáveis nativas, são considerados arrays vazios dentro
* do PHP. ** */

print $_GET; // Isso é um array vazio.
print '<br>';
print_r($_GET); // Ele trás o dir e o file que são parâmetros já passados no arquivo exercicio.php
print "<br>{$_GET['nome']}";