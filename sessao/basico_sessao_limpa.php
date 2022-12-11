<?php
session_start();
// Para destruir uma sessão é usado:
session_destroy();
// Depois que é destuido, é direcionado para outra página usando o header:
header('Location: exercicio.php?dir=sessao&file=basico_sessao'); // Quando achar esta linha, irá modificar a URL
// e navegar direto para esta página;
