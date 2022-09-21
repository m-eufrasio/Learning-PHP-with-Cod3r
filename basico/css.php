<div class="titulo">Integração CSS</div>

<!-- é possível misturar as tags HTML com PHP, o ideal é separar sempre que der, mas esse é um exemplo -->

<h1 center>
<?php 
print "Olá ";
print '<small>';
print "mundo";
print '</small>';
?>
</h1>

<!-- declarado as tags php dessa forma, ele irá ler apenas o que está dentro da div, ele não le várias sentenças declaradas mesmo que estejam separadas como no exemplo abaixo -->
<?= "<div center azul>Outra forma de me 'expressar'!</div>";
"teste"; ?>

<br>

<div center><button dobro><?= "Legal"; ?></button></div>

<style>
    button {
        padding: 5px <?= 2 * 10 ?>px;
        background-color: #4286F4;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }

    /* esse tipo de seletor quer dizer que: qualquer elemento html que tenha esse tipo de propriedade chamada center receberá as suas propriedades */
    [center] {
        display: flex;
        justify-content: center;
    }

    [azul] {
        color: #4286F4;
    }

    [dobro] {
        font-size: 2rem;
    }
</style>