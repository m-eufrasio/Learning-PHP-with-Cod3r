<div class="titulo">Arrays Constantes</div>

<?php
/* Não será possível acrescentar, deletar ou mudar elementos de arrays
* constantes, apenas ler os dados */

const FRUTAS = ['laranja', 'abacaxi'];
// Pode ser escrito desta forma também:
// const FRUTAS = array('laranja', 'abacaxi');
print FRUTAS[0];

const CARROS = ["fiat" => "uno", "ford" => "fiesta"];
print '<br>' . CARROS["fiat"];
// Usando define:
define('CIDADES', array('Belo Horizonte', 'Recife'));
print '<br>' . CIDADES[1];