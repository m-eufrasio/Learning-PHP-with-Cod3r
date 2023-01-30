<div class="titulo">PDO: Select</div>

<?php
require_once('connection_pdo.php');

//fetch pega apenas um registro, fatchAll pega tudo.
$connection = newConnection();
$sql = "SELECT * FROM cadastro";
$result = $connection->query($sql)->fetchAll(PDO::FETCH_ASSOC);
//Resultado sai como um array associativo.
print_r($result);
print "<hr>";
/*
 * LIMIT para indicar a quantidade de linhas exibidas e OFFSET para mostrar
 * o ponto de largada ao LIMIT.
*/
$sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio";

$stmt = $connection->prepare($sql);
/**
 * É precisso declarar do tipo inteiro, se o parâmetro não for passado,
 * significa que o valor será como string, e o LIMIT dentro do $sql não
 * irá 'ler'.
*/

$stmt->bindValue(':qtde', 2, PDO::PARAM_INT);
$stmt->bindValue(':inicio', 3, PDO::PARAM_INT);

print_r(get_class_methods($stmt));

if ($stmt->execute()) {
    $result = $stmt->fetchAll();
    print_r($result);
} else {
    print "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

print "<hr>";

$sql = "SELECT * FROM cadastro WHERE id = ?";
$stmt = $connection->prepare($sql);
// Para validar a passagem do ID:
if ($stmt->execute([1])) {
    $result = $stmt->fetch();
    print_r($result);
} else {
    print "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}
