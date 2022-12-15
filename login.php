<?php 

session_start();
// Vamos verificar se o usuário está no cookie:
if($_COOKIE['usuario']) {
    // Se ele estiver, será necessário setar o valor da sessão no cookie.
    $_SESSION['usuario'] = $_COOKIE['usuario'];
    // Se o cookie expirar, o if dará falso;
}

if(!$_SESSION['usuario']) {
    header('Location: file:///C:/xampp/htdocs/Learning-PHP-with-Cod3r/login.php');
}

$email = $_POST['email'];
$senha = $_POST['senha'];

if($_POST['email']) {
    $usuarios = [
        [
            "nome" => "Matheus",
            "email" => "math@gmail.com",
            "senha" => "123"
        ]
    ];
    // irá validar o usuário e a senha:
    foreach($usuarios as $usuario) {
        $emailValido = $email === $usuario['email'];
        $senhaValido = $senha === $usuario['senha'];
        // Se validado, os erros de login serão anulados e o nome setado
        // depois será direcionado para a tela principal.
        if($emailValido && $senhaValido) {
            $_SESSION['erros'] = NULL;
            $_SESSION['usuario'] = $usuario['nome'];
            // O usuário ficará logado no sistema por 30 dias.
            // É o tempo atual somado a 60s vezes 60min vezes 24h vezes 30dias
            $expira = time() + 60 * 60 * 24 * 30;
            // Será salvo apenas o nome do usuário no cookie:
            setcookie('usuario', $usuario['nome'], $expira);
            header('Location: index.php');

        }
    }
    // Caso não seja válido, será exiido uma mensagem de erro!
    if(!$_SESSION['usuario']) {
        $_SESSION['erros'] = "Usuário/Senha inválidos"; 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Curso PHP</title>
</head>
<body class="login">
    <header class="cabecalho">
        <h1>Curso de PHP</h1>
        <h2>Seja Bem Vindo</h2>
    </header>

    <main class="principal">
        <div class="conteudo">
            <h3>Identifique-se</h3>
            <!-- É possível usar o endif, porém no lugar de chaves usa dois pontos -->
            <?php if ($_SESSION['erros']) : ?>
            <!-- Para controlar os possíveis erros, é percorrido a lista. -->
                <div class="erros">
                    <?php foreach ($_SESSION['erros'] as $erro): ?>
                        <p><?= $erro ?></p>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            <form action="#" method="POST">
                <div>
                    <!-- O for da label faz referência ao id. -->
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <button>Entrar</button>
            </form>
        </div>
    </main>
    <footer class="rodape">
        MATHEUS EUFRÁSIO <?= date('Y'); ?>
    </footer>
</body>
</html>
