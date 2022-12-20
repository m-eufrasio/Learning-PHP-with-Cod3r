<div class="titulo">Datas #02</div>

<?php
/*
* Para não ter que definir alguns padrões de data a todo momento, abaixo
* já é declarado as variáveis que serão utilizdadas
*/
$formatoData1 = 'D, d \d\e M \d\e Y';
$formatoData2 = '%A, %d de %B de %Y';
$formatoDataHora = '%A, %d de %B de %Y - %H:%M:%S';
// DateTime informa a data e hora atual.
$agora = new DateTime();
// Para verificar todas as porpriedades dessa classe.
print_r($agora);
print '<br>';
// Vou pegar a data e hora atual e formatar.
print $agora->format($formatoData1); // format formata no modelo americano.
print '<br>';
setlocale(LC_TIME, 'pt-BR');
print strftime($formatoData2, $agora->getTimestamp()) . '<br>';
// É possível passar parâmetros para o DateTime.
$amanha = new DateTime('+1 day'); // Acrescentado mais um dia.
print strftime($formatoData2, $amanha->getTimestamp()) . '<br>';

$dataFixa = new DateTime('1975-01-25 15:30:50');
print strftime($formatoDataHora, $dataFixa->getTimestamp()) . '<br>';

$amanha->modify('+1 day'); // modify() altera o valor.
print strftime($formatoDataHora, $amanha->getTimestamp()) . '<br>';

$amanha->setDate(2000, 5, 20); // setDate() também altera os valores.
print strftime($formatoDataHora, $amanha->getTimestamp()) . '<br>';
// Agors iremos comprar as datas, em PHP tem como dessa forma:

$dataPassada = new DateTime('2000-05-17');
$dataFutura = new DateTime('2030-11-26');
$outraData = new DateTime('2030-11-26');
print ($amanha > $dataPassada ? 'Maior' : 'Menor') . '<br>';
print ($amanha > $dataFutura ? 'Maior' : 'Menor') . '<br>';
/* 
* Neste caso, se for estritamente igual, irá dar diferente, pois são
* dois objetos diferentes sendo criados em espaços de memória diferente
*/
print $outraData === $dataFutura ? 'Igual' : 'Diferente';

print '<br>';
// Setando o timezone da área.
$timeZone = new DateTimeZone('America/Sao_Paulo');
// O argumento null indica que ele ainda irá pegar da data atual.
$agora = new DateTime(null, $timeZone);
print $agora->format('d/M/Y H:i:s');


