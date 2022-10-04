<div class="titulo">Desafio Palíndromo</div>

<form action="#" method="POST">
    <label for="">Digite alguma palavra</label>
    <input type="text" placeholder="palavra" name="palavra" style="padding: 0.4em">
    <button>Verificar</button>
</form>

<?php
$palavra = $_POST['palavra'];

if($palavra === strrev($palavra)) { // sttrev inverte uma string!
    print "É palíndromo!";
} else {
    print "Não é Palíndromo";
}
?>