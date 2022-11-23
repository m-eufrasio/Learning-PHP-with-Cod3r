<div class="titulo">Try | Catch</div>

<?php
// Dessa forma irá gerar um erro.
//print intdiv(7, 0);
// O bloco try é criado para códigos que podem gerar algum erro.
try { // É necessário o uso do try junto do catch ou finally.
    print intdiv(7, 0);
} catch(Error $e) {// É obrigatório colocar o tipo (no caso Erro).
    print 'Houve um erro';
}
// É possível ter mais de um catch.
catch(Exception $e) {
    print 'Houve um erro 2';
}