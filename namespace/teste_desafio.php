<div class="titulo">Desafio Include/Require</div>

<?php
require_once('Rh\usuario_desafio.php');

$usuario = new Usuario("Logen 9 Sangrento", 35, "9_logen");
$usuario->apresentar();
unset($usuario);