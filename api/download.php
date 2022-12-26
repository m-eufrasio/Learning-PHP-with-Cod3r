<div class="titulo">Download</div>

<?php
// Será usado session para este exercício:
@session_start();
/*
 * Caso não tenha nenhum arquivo na sessão, será enviado um array vazio como default,
 * A sessão sempre será iniciada com um array de arquivos, neste código.
 */
$arquivos = $_SESSION['arquivos'] ?? [];

$pastaUpload = __DIR__ . '/../files/'; // Será armazenado aqui.
@$nomeArquivo = $_FILES['arquivo']['name']; // Name do input.
$arquivo = $pastaUpload . $nomeArquivo;

@$tmp = $_FILES['arquivo']['tmp_name'];
/*
 * Verifica se realmente foi feito upload, depois encaminha para o destino.
 * Primeiro parâmetro é o nome do arquivo e o segundo é o destino, para onde
 * ele irá.
 */
if (move_uploaded_file($tmp, $arquivo)) {
    print "<br> Arquivo válido e enviado com sucesso.";
    // Precisa ter os [] pq isso indica que terá novos elementos dentro do array.
    $arquivos[] = $nomeArquivo; 
    $_SESSION['arquivos'] = $arquivos; // A sessão recebe o arquivo upado.
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