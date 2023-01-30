<div class="titulo">PDO: Delete</div>

<?php
require_once "connection_pdo.php";
$sql = "DELETE FROM cadastro WHERE id >= ?";

$connection = newConnection();
$stmt = $connection->prepare($sql);

if ($stmt->execute([1])) {
    $result = $stmt->fetch();
    print "Sucesso";
} else {
    print "Erro";
    print_r($stmt->errorInfo());
}