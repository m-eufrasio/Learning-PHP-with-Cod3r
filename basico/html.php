<div class="titulo">Integração HTML</div>

<!-- é possível misturar as tags HTML com PHP, o ideal é separar sempre que der, mas esse é um exemplo -->

<h1>
<?php 
print "Olá ";
print '<small>';
print "mundo";
print '</small>';
?>
</h1>

<!-- declarado as tags php dessa forma, ele irá ler apenas o que está dentro da div, ele não le várias sentenças declaradas mesmo que estejam separadas como no exemplo abaixo -->
<?= "<div>Outra forma de me 'expressar'!</div>";
"teste"; ?>

<br>

<div><button><?= "Legal"; ?></button></div>