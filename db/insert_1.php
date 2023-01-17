<div class="titulo">Inserir Registro #01</div>

<?php

require_once("connection.php");

$sql = "INSERT INTO cadastro
                    (nome, nascimento, email, site , filhos, salario)
                    VALUES (
                        'Sarah',
                        '1998-02-12',
                        'sarah@gmail.com',
                        'https://sarah123.gov.br',
                        0,
                        8000.50
                    )";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if ($resultado) {
    print "Sucesso";
} else {
    print "Erro: " . $conexao->error;
}

$conexao->close();