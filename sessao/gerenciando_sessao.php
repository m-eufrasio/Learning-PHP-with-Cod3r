<div class="titulo">Gerenciando Sessão</div>

<?php
session_start();
// Toda sessão possui um ID, logo é possível obter ele.
print session_id(); // É possível passar no argumento o id de uma sessão;
// Acesso a sessão for referência de memória;
$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;
print '<br>' . $_SESSION['contador'];

if($_SESSION['contador'] % 5 === 0) {
    session_regenerate_id(); // Redefine o ID desvinculando a outra sessão;
}
// Se for igual ou maior que 15, a sessão é destruida e refeita;
if($_SESSION['contador'] >= 15) {
    session_destroy();
}