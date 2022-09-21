<div class="titulo"> Desafio PI </div>

<?php
// O desafio é tratar os dois como iguais.
print pi();
$pi = 3.14;

if($pi <= pi()) {
    print "<br>Iguais!<br>";
} else {
    print "<br>Diferentes!";
}

/* ** Usei <= para tratar como iguais, antes do desafio estava === ** */

// RESPOSTA:

if($pi - pi() <= 0.01) {
    print "Praticamente iguais!";
} else {
    print "<br>Valor errado!";
}

