<div class="titulo">PDO: Edit</div>

<?php
require_once('connection_pdo.php');

$sql = "UPDATE cadastro
SET nome = ?,
    nascimento = ?,
    email = ?,
    site = ?,
    filhos = ?,
    salario = ?
WHERE id = ?";

$connection = newConnection();
$stmt = $connection->prepare($sql);

$resultado = $stmt->execute([
    'Gui',
    '1980-12-12',
    'gui@gui.com.br',
    'http://gui.co',
    1,
    12000,
    22
]);

if ($resultado) {
    print "Sucesso";
} else {
    print "Erro";
}