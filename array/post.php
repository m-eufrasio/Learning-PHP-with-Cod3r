<div class="titulo">$_POST</div>

<!-- O hashtag # é uma âncora para linkar páginas. Nesse caso ele representa a página atual,
ele não muda se mantém na mesma página. -->
<!-- É a partir do atributo name que irá chegar até o backend. -->
<form action="#" method="post">
    <input type="text" name="nome"> 
    <input type="text" name="sobrenome">
    <select name="estado">
        <option value="PR">PR</option>
        <option value="SP">SP</option>
    </select>
    <button>Enviar</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php

print $_POST; // Será um array vazio.
print_r($_POST);
print "<br>";
print_r(count($_POST)); // É possível fazer um count, pois o POST é um array.