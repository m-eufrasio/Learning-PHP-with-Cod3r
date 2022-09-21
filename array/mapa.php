<div class="titulo">Array</div>


<?php
// O que define uma sentença de código em PHP é o ponto e vírgula ;
$dados = array(
  "idade"=> 25, // Idade é a chave, 25 o valor.
  "cor" => "verde",
  "peso" => 49.8
);

print_r($dados);

// Agora que estamos usando map (chave e valor), não é mais possível acessar pelo índice.
var_dump($dados[0]);
print '<br>' . $dados['idade'];
print '<br>' . $dados['cor'];
print '<br>' . $dados['peso'];
// O resultado null também é exibido quando usa-se um vardump numa chave inexistente.
var_dump($dados["outra_informacao"]);

// É possível misturar as duas formas de array, mas não é recomendado.
$lista = array(
  "a",
  "cinco" => "b",
  "c",
  8 => "d",
  "e"
);
print '<br>';
print_r($lista);

$lista[] = 'i'; // Incluindo no array mais um elemento.
print '<br>';
print_r($lista);

$lista['vinte'] = 'j'; // Incluindo no array mais um elemento.
print '<br>';
print_r($lista);

/* ** Se incluir no index false, ele irá considerar como índice 0 pois false é 0
* Agora, se for true, ele irá considerar como índice 1, pois true é 1. ** */
