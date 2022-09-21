<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">
    <title>Curso PHP</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso de PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <a href=<?= "basico/ola.php" ?> class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php 
                // include("basico/ola.php");
                include($_GET['dir'] . "/" . $_GET['file'] . ".php");
                // include("{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer class="rodape">
        MATHEUS EUFRÁSIO o <?= date('Y'); ?>
    </footer>
</body>
</html>