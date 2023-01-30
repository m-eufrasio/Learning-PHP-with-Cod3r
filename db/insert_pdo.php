<div class="titulo">PDO: Insert</div>

<?php
require_once('connection_pdo.php');

$sql = "INSERT INTO cadastro
(nome, nascimento, email, site , filhos, salario)
VALUES (
    'Leo',
    '1990-02-01',
    'leo@gmail.com',
    'https://leo123.gov.br',
    2,
    7500.50
)";

$connection = newConnection();

if ($connection->exec($sql)) {
    //Pega o id dentro de connection:
    $id = $connection->lastInsertId();
    print "Novo cadastro com id $id.";
} else {
    print $connection->errorCode() . '<br>';
    print_r($connection->errorInfo());
}
?>