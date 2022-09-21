<div class="titulo"> If Else </div>

<?php

if(true) {
    print "Sentença avulsa!<br>";
}

// Esse bloco não serve para nada na verdade, mas os prints serão impressos
{
    print "Serei impresso?<br>";
    print "Serei impresso novamente!<br>" ;
}

// A titulo de curiosidade, se for inserido ponto e vírgula depois das parên
// teses do if, ele irá separar do bloco, e o if se torna uma condição apenas
// com parâmetros e sem bloco, o que estiver no bloco fica independente de
// alguma condição importa pelo if.

if(true); {
    print "Sentença avulsa!<br>";
}

if(true) {
    print "Verdadeiro<br>";
} 
else 
    print "Falso<br>";

// É possível criar um if sem bloco, porém só funciona quando é uma sentença.
if(true)
    print "Sem bloco, apenas uma sentença.<br>";

// Entrando no else:
if(false) {
    print "Entrou no if<br>";
} 
else 
    print "Entrou no else<br>";

if(false) {
    print "Entrou no if<br>";
}
else if(true) {
    print("Entrou no else");
} 
else 
    print "Entrou no else<br>";