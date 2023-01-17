<div class="titulo">Criar Banco</div>

<?php
require_once "connection.php";
/**
 * Será passado null pq inicialmente a tentativa de conexão será feita em bd 
 * padrão, e como ainda não terá nenhum bd, dará erro!
 * 
 */
$conexao = novaConexao(null);
/**
 * Será criado apenas uma vez. Versão alternativa com if not exist:
 * 'CREATE DATABASE IF NOT EXISTS curso_php'
*/
$sql = 'CREATE DATABASE curso_php';
// Apenas isso cria o BD.
$resultado = $conexao->query($sql);
//Tratando a conexão, neste caso precisa executar apenas uma vez.
if ($resultado) {
    print "Banco criado com sucesso!";
} else {
    print "Erro: " . $conexao->error;
}
$conexao->close(); //Fecha a conexão no final da execução;
?>