<div class="titulo">Criar Tabela</div>

<?php
require_once('connection.php');

// DDL - Data Definition Lang.
$sql = "CREATE TABLE IF NOT EXISTS cadastro (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    nascimento DATE,
    email VARCHAR(100) NOT NULL,
    site VARCHAR(100),
    filhos INT,
    salario FLOAT
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);
//Tratando a criação do banco:
if ($resultado) {
    print "Criado com sucesso!";
} else {
    print "Erro: " . $conexao->error;
}

$conexao->close();

/**
 * UNSIGNED - sem sinal.
 */
?>