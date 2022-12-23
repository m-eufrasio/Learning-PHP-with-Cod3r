<div class="titulo">Upload</div>

<?php
// Assim como existe o array POST e GET também existe o FILES.
print_r($_FILES);
// Verifica se tem arquivos dentro para processar o upload:
if ($_FILES && $_FILES['arquivos']) {
    $pastaUpload = 'Imagens/'; // Diretório
    // Como é um array, posso pegar o nome do arquivo:
    $nomeArquivo = $_FILES['arquivos']['nome'];
    $arquivo = $pastaUpload . $nomeArquivo;
    // Arquivo temporário que será movido para o caminho definitivo.
    $tmp = $_FILES['arquivos']['tmp_name'];
    // Função mova o arquivo que foi feito upload:
    if (move_uploaded_file($tmp, $arquivo)) {
        print "<br> Arquivo válido e enviado com sucesso.";
    } else {
        print "<br>Erro no upload de arquivo!";
    }
}
?>

<!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- HTML =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->

<!-- Através do encode do formulario (enctype), é possível suporta arquivos! -->
<form action="#" method="POST" enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- CSS =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>