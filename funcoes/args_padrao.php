<div class="titulo">Argumentos Padrão</div>

<?php
// É possível passar valores padrões nos argumentos da function.
function saudacao($nome = "Senhor(a)", $sobreNome = "Cliente") {
  return "Bem vindo, $nome $sobreNome!<br>";
} 

print saudacao();
print saudacao(null);
print saudacao(null, NULL); // O null não é case sensitive.
print saudacao('Mestre', 'Supremo');

// Passando um argumento sem padrão e outro com.
// Importante colocar o valor padrão por último. Pois caso precice passar
// valores ao chamar o método, obrigatoriamente é preciso colocar valores
// para o argumento padrão.
function anotarPedido($comida, $bebida = 'Água') {
  print "Para comer: $comida <br>";
  print "Para beber: $bebida <br>";
}

// Como já existe um argumento padrão (o segundo), só é precios preencher o primeiro.
anotarPedido('Lasanha');
anotarPedido('Lasanha', 'Refrigerante'); // Mudando o valor padrão. 

function anotarPedido2($bebida = 'Água', $comida) {
  print "Para comer: $comida <br>";
  print "Para beber: $bebida <br>";
}
// Não irá funcionar essa chamada, pois a ordem nos prints do método estão invertidas.
// O hamburguer está substituindo a bebida.
// anotarPedido2('Hamburguer');
anotarPedido2('Refrigerante2', 'Hamburguer2');
