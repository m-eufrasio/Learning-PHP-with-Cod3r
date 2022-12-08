<div class="titulo">Try | Catch</div>

<?php
// Dessa forma irá gerar um erro.
//print intdiv(7, 0);
// O bloco try é criado para códigos que podem gerar algum erro.
try { // É necessário o uso do try junto do catch ou finally.
    print intdiv(7, 0);
} catch(Error $e) {// É obrigatório colocar o tipo (no caso Error).
    print 'Houve um erro <br>';
}
// É possível ter mais de um catch.
catch(Exception $e) { // Exception é usado em casos de violação a regra;
    print 'Houve um erro 2';
}

try {
    // Se não tiver o throw, irá criar uma exception que não será lançada
    // vai chegar na linha do print intdiv e gerar um erro de divisão por zero
    // e vai exibir a mensagem 'Divisão por zero'.
    throw new Exception('Um erro desconhecido aconteceu');
    print intdiv(7, 0);
} catch(DivisionByZeroError $e) {
    print 'Divisão por zero <br>';
} catch(Throwable $e) { // Em throwable, tudo está nele: erros ou exceções;
    print 'Erro encontrado: ' . $e->getMessage(). '<br>';
} finally { // Se o try for ou não executado, o finally será acessado;
    // Se o catch funcionar, o finally será executado da mesma forma;
    print 'Sempre será executado <br>';
}

/* O ideal é SEMPRE colocar as exceções mais específicas antes e então as mais
genéricas depois, porque se não será acessado apenas as mais genéricas antes.
*/