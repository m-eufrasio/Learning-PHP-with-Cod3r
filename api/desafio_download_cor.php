<div class="titulo">Download</div>

<?php

@session_start();

$arquivos = $_SESSION['arquivos'] ?? [];

$pastaUpload = __DIR__ . '/../files/'; 
@$nomeArquivo = $_FILES['arquivo']['name']; 
$arquivo = $pastaUpload . $nomeArquivo;
@$tmp = $_FILES['arquivo']['tmp_name'];

if (move_uploaded_file($tmp, $arquivo)) {
    print "<br> Arquivo válido e enviado com sucesso.";
    $arquivos[] = $nomeArquivo; 
    $_SESSION['arquivos'] = $arquivos;
} else {
    print "<br>Erro no upload de arquivo!";
}
 ?>

<!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- HTML =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->

<form action="#" method="POST" enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<ul>
    <?php foreach($arquivos as $arquivo): ?>
        <!-- Se a posição desse png for maior que 0, o arquivo será validado. -->
        <?php if(stripos($arquivo, '.png') > 0): ?>
            <li>
                <img src="\Learning-PHP-with-Cod3r\files\<?= $arquivo ?>" height="120"/>
            </li>
        <?php endif ?>    
    <?php endforeach ?>    
</ul>

<!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- CSS =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>