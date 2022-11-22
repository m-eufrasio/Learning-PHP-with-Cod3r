<?php use \Usuario; ?>
<div class="titulo">Desafio Use/As</div>

<?php

$usuario = new Usuario("Logen 9 Sangrento", 35, "9_logen");
$usuario->apresentar();
unset($usuario);