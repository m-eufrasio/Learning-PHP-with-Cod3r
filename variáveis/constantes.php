<div class="titulo">Constantes</div>

<?php
define('TAXA_DE_JUROS', 5.9); // O método define() faz a chamada de um algoritmo (será visto mais afrente)
print TAXA_DE_JUROS; // Essa é a forma correta de acessar a const.
print '<br>' . $TAXA_DE_JUROS . '!'; // Essa forma não funciona para acessar a const.
//TAXA_DE_JUROS = 2.5; // Dessa forma terá um erro de syntax, impedirá de renderizar o restante.

const NOVA_TAXA = 2.5; // Pode ser declarado dessa forma.
print '<br>' . NOVA_TAXA;

$valorVariavel = 2.8;
//const NOVISSIMA_TAXA = $valorVariavel; // Dessa forma não funciona, é considerado erro de syntax.
//const NOVISSIMA_TAXA = 2.8 + 1.2; // É possível realizar operações aritméticas na declaração da const!
define('NOVISSIMA_TAXA', $valorVariavel); // É possível declarar usando o define desta forma, passando a variável.
print '<br>' . NOVISSIMA_TAXA;

# Constantes globais, algumas delas:
print '<br>' . PHP_VERSION;
print '<br>' . PHP_INT_MAX;

# Constantes globais que usam duplo underline
print '<br> Linha: ' . __LINE__; // Exibe o número da linha
print '<br>' . __FILE__; // Exibe o caminho que o arquivo está armazenado.
print '<br>' . __DIR__; // Exibe o diretório do arquivo.
