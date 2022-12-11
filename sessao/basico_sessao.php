<div class="titulo">Sessão</div>

<?php
// Primeiro comando que usamos para iniciar uma sessão é:
session_start();
// Também teremos um array assiociado a uma session;
print_r($_SESSION); // Irá gerar alguns warnings pois os campos estão vazios;                            
print '<br>';
  
if(!$_SESSION['nome']) {
    $_SESSION['nome'] = 'Gabriel';
}

if(!$_SESSION['email']) {
    $_SESSION['email'] = 'gabriel@azmail.com';
}

print_r($_SESSION);

/* 
* Se fechar o browser e abrir novamente, a sessão será encerrada, caso de mais
* um refresh a sessão será iniciada.
* Se fechar o browser com os processos do navegador rodando, a sessão não
* será encerrada.
*/
?>

<p>
    <a href="exercicio.php?dir=sessao&file=basico_sessao_alterar">
        Alterar Sessão
    </a>
</p>