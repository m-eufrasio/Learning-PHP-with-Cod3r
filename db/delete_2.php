<div class="titulo">Excluir Registro #02</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<?php
require_once('connection.php');

$connection = novaConexao();
/*
 * $_GET['excluir'] pode ter emendado outro comando SQL. Pode ser acionado
 * no '?' (caso esse GET seja passado como parâmetro). O query() pode 
 * executar o segundo comando (caso exista).
 */
if($_GET['excluir']) { //Se a chave estiver disponível, ai entra aqui para excluir.
    //Colocando o parâmetro dentro do SQL faz com que o prepare impeça o sqlInjection.
    $deleteSql = "DELETE FROM cadastro WHERE id = ?";
    $stmt = $connection->prepare($deleteSql); //Impede que um sql seja executado logo de primeira;
    /**
     * Vincula o parâmetro ao SQL. Primeiro argumento é o tipo de dado,
     * no caso o tipo escolhido foi o inteiro.
     */
    $stmt->bind_param("i", $_GET['excluir']); 
    $stmt->execute();
}

$sql = "SELECT id, nome, nascimento, email FROM cadastro";

$resultado = $connection->query($sql);

$registers = [];

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $registers[] = $row;
    }
} elseif ($connection->error) {
    print "Erro: " . $connection->error;
}


$connection->close();
?>

<table class="table table-hover table-striped table-bordered">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>E-mail</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach ($registers as $register): ?>
            <tr>
                <td> <?= $register['id'] ?> </td>
                <td> <?= $register['nome'] ?> </td>
                <td> <?= $register['nascimento'] ?> </td>
                <td> <?= $register['email'] ?> </td>
                <td>
                     <!-- A partir do &excluir= é um parâmetro adicional para pegar o id e possibilitar a exclusão.    -->
                    <a href="exercicio.php?dir=db&file=delete_2&excluir=<?php $register['id'] ?>"
                       class="btn btn-danger">
                       Excluir
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>