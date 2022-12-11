<?php
session_start(); // Ele é necessário estar em todos os arquivos que tem sessão.
 
?>

<p>
    <b>Nome: </b> <?= $_SESSION['nome'] ?> <br>
    <b>Email: </b> <?= $_SESSION['email'] ?>
</p>
<!-- Alterando o valor de algum elemento da sessão: -->
<?=
// O procedimento é simples, é a mesma coisa que alterar um array;
$_SESSION['email'] = 'gabrieltel@terra.com.br'; 
?>

<p>
    <a href="exercicio.php?dir=sessao&file=basico_sessao">Voltar</a>
</p>
<p>
    <a href="exercicio.php?dir=sessao&file=basico_sessao_limpa">Limpar Sessão</a>
</p>