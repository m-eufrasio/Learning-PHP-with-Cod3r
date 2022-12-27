<div class="titulo">Datas 01</div>
<?php
// Linguagens usam o marco para datas a partir de 01/01/1969 
print time() . '<br>'; // Exibido o marco 0 devido ao sistema UNIX
/* 
* No PHP existe o método date que irá aceitar parâmetros de string,
* eles definem a formatação das datas
*/
// No PHP, a contra-barra é chamado de escape, serve para sair do efeito 
// que o método causa no parametro.
print date('D, d \d\e M \d\e Y H:i A') . '<br>'; // Cada letra representa uma formatação.
// Abaixo, temos outra forma de realizar a mesma formatação de data.
print strftime('%A, %d de %B de %Y', time()) . '<br>';
// setlocate formata para a região desejada.
setlocale(LC_TIME, 'pt-BR', 'pt_BR.utf-8');
// Horário e data na mesma forma, porém em pt-BR
print strftime('%A, %d de %B de %Y', time()) . '<br>';

$amanha = time() + (24 * 60 * 60);
print strftime('%A, %d de %B de %Y', $amanha) . '<br>';
// Pega a data atual e acrescenta mais uma semana.
$proximaSemana = strtotime('+1 week'); // Pode ser ano.
print strftime('%A, %d de %B de %Y', $proximaSemana) . '<br>';
// o mktime formata da seguinte forma: hora, minuto, segundo, mes, dia e ano.
// o mktime exibe uma data específica que é fixa.
$dataFixa = mktime(15, 30, 50, 1, 25, 1975);
print strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa) . '<br>';
/**
 * strftime() foi DEPRECIADO, logo use date()(para formatação independente de
 * localidade) ou format() (para formatação dependente de localidade).
 */ 

