<div class="titulo"> Operadores Relacionais </div>

<?php
// var_dump(1 == 1);
// var_dump(1 < 1);
// var_dump(1 >= 1);
// var_dump(1 != 1);
// var_dump(1 <> 1); Forma alternativa de dizer: é diferente de.

// var_dump(1 == "1"); Compara valores para ver se são iguais.
// var_dump(1 != "1"); Compara valores para ver se são diferentes.


// Estritamente igual ===, além de comparar os valores, compara o tipo.
var_dump(1 === "1");
// Existe a diferença estrita.
var_dump(1 !== "1");

print "<p>Relacionais no If/Else</p><hr>";
$idade = 12;

if($idade < 18) {
    print "Idade é menor que 18!";
} else if($idade > 18) {
    print "Idade é maior que 18!";
} else if($idade == 18) {
    print "Idade é igual a 18!";
} else {
    print "Idade é maior que  18!";
}

print "<p> Spaceship </p><hr>";
    // O <=> é o spaceship, útil para fazer ordenação ou comparação entre números.
    // Quando o primeiro operando é maior que o segundo, o resultado é 1.
    // Se ambos forem iguais, o retorno é 0.
    // Se o último operando for maior, o retorno é de -1.
    var_dump(5 <=> 3); 

?>

<style>
p {
    margin-bottom: 10px;
}

hr {
    margin-top: 0px;
}
</style>



