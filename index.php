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
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                require_once('menu.php');
            ?>
        </div>
    </main>
    <footer class="rodape">
        MATHEUS EUFRÁSIO <?= date('Y'); ?>
    </footer>
</body>
</html>