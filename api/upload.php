<div class="titulo">Upload</div>

<?php
/**
 * Assim como existe o array POST e GET também existe o FILES.
 * Quando é feito um upload, é possível verificar com o print_r a forma que
 * o array está organizando os arquivos, com separação de index.
 */
print_r($_FILES);
/**
 * Verifica se existe algum arquivo em $_FILES e também especificamente dentro
 * da chave ['arquivos'].
 */
if ($_FILES && $_FILES['arquivos']) {
    $pastaUpload = 'Imagens/'; // Diretório
    // Como é um array, posso pegar o nome do arquivo:
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload . $nomeArquivo;
    /**
     * Arquivo temporário que será movido para o caminho definitivo. Ou seja,
     * dentro de $_FILES existe uma chave que é tmp_name, ela existe para
     * arquivos serem armazenados em um diretório temporário já existente.
     */
    $tmp = $_FILES['arquivo']['tmp_name'];
    /**
     * Função mova o arquivo que foi feito upload, com ela é possível alterar
     * para onde é enviado o arquivo temporário, e é isso que vamos fazer aqui:
     */
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