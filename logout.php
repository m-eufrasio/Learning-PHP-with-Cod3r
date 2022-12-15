<?php
session_start();
session_destroy();
// Para garantir que o cookie seja destruido e o usuário deslogado de fato:
unset($_COOKIE['usuario']);
// irá setar para uma string vazia e limpar o cookie dentro do navegador.
setcookie('usuario', ''); 
header('Location: login.php');