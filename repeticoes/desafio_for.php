<div class="titulo">Desafio For</div>

<?php
$hashtag = "#";

for($i = 0; $i < 5; $i++) {
    print $hashtag++ ."<br>";
    $hashtag .= "#"; 
}

/* FORMA ALTERNATIVA DE RESOLVER A QUESTÃO */
print '<hr>';
$impressao = '';
for($impressao = "#"; $impressao !== "######"; $impressao .= "#") {
    print "$impressao <br>";
}

