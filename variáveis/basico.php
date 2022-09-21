<div class="titulo">Variáveis</div>

<?php
$numeroA = 13;
print $numeroA;
var_dump($numeroA);
$a = 2;
$b = 5;
$soma = $a + $b;
print $soma . '<br>';
// Algumas coisas no PHP não são case-sensitive, ou seja, vc pode usar o echo ou o print como EcHo ou PrInT que irá funcionar.
print isset($soma) . '<br>'; // é importante respeitar o case-senitive pois as variáveis em PHP são case-sensitive.
// o método asset() realiza a validação de uma variável, ele verifica se a variável está setada. 
unset($soma); // dessa forma vc retira o valor que está setado, irá invalidar a variável.
var_dump($soma);

$variavel = 10;
print '<br>' . $variavel;
// O interpretador do PHP consegue distinguir qual é o tipo da variável, vc não precisa declarar o tipo dela. PHP é de tipagem fraca.
// É possível misturar conteúdos na mesma variável devido ser tipagem fraca, porém deve tomar cuidado com isso.
$variavel = "Agora sou uma string!";
print '<br>' . $variavel;

# Regras de nomenclaturas:

$var = 'válido'; // O que identifica uma variável é o sinal de dolar antes do nome dela.
$var2 = 'válido'; // É possível inserir números no nome da variável. O nome pode ser chamado de identificar ou rótulo
$VAR3 = 'válido'; // Também pode usar letras maiúsculas;
$_var_4 = 'válido'; // É possível usar underline(inclusive é o snake case, uma boa práticad de nomenclatura)
$vãr5 = 'válido'; // É possível usar acento, mas é importante não usar pois pode dar conflitos entre diferentes sistemas operacionais.
#$6var = 'inválido'; // Não é possível começar com número
#$%var7 = 'inválido';
#$var8% = 'inválido';

# Variáveis pré-definidas do PHP:

print '<br>' . $_SERVER;
var_dump($_SERVER);

