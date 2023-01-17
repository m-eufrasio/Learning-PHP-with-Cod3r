<div class="titulo">Excluir #01</div>

<?php
require_once('connection.php');

$sql = "DELETE FROM cadastro WHERE id = 1";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if ($resultado) {
    print "Sucesso!";
} else {
    print "Erro: " . $conexao->error;
}

$conexao->close();