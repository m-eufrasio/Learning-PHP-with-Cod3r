<div class="titulo">Desafio Download</div>

<?php
@session_start();

/**
 * Será filtrado apenas para arquivos PNG e será exibido as imagens.
 */
// Array com as extensões permitidas
$arquivos = $_SESSION['arquivos'] ?? [];

$pastaUpload = __DIR__ . '/../files/'; 
@$nomeArquivo = $_FILES['arquivo']['name']; 
$arquivo = $pastaUpload . $nomeArquivo;
$extensoes_permitidas = ['.png'];
// Faz a verificação da extensão do arquivo enviado
$extensao = strrchr($nomeArquivo, '.');
@$tmp = $_FILES['arquivo']['tmp_name'];

if (move_uploaded_file($tmp, $arquivo)) {
    // Verifica se no array, a extensão do arquivo é igual as permitidas.
    if (in_array($extensao, $extensoes_permitidas) === true) {
        echo 'Extensão permitida. Arquivo recebido com sucesso.';
        $arquivos[] = $nomeArquivo; 
        $_SESSION['arquivos'] = $arquivos;
    } else {
        echo 'Por favor, envie imagens apenas no formato PNG.';
    } 
} else {
    print "<br>Erro no upload de arquivo!";
}
 ?>

<!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- HTML =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->

<form action="#" method="POST" enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<!-- Será percorrido cada um dos arquivos da ul -->
<ul>
    <?php foreach($arquivos as $arquivo): ?>
        <li>
            <a href="\Learning-PHP-with-Cod3r\files\"<?= $arquivo ?>>
                <?= $arquivo ?>
            </a>
        </li>
    <?php endforeach ?>    
</ul>

<!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- CSS =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>

<!--
Funções novas:
strrchar - Encontra a ultima ocorrência de um caractere em uma string, é passado
dois parâmetros, o primeiro é a string em si e o segundo é o ponto de parada,
após isso será lido do final para o começo da string.
in_array - Checa se um valor existe em um array. No primeiro parâmetro é o
valor procurado, no segundo é onde ele será procurado (o array), também é
possível passar um terceiro parâmetro que irá verificar a tipagem do valor
produrado, no caso vc passa true para o terceiro.
-->


