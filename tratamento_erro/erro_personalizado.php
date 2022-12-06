<div class="titulo">Erro Personalizado</div>

<?php
class faixaEtariaException extends Exception {
    public function __construct($message, $code = 0,
        $previous = null) {
            print "Erro personalizado: $message <br>"; // Para ver a mensagem na construção;
            parent::__construct($message, $code, $previous);
    }
}

function calcularTempoAposentadoria($idade) {
    if($idade < 18) {
        throw new faixaEtariaException('Ainda está muito longe');
    }
    if($idade > 70) {
        throw new faixaEtariaException('Já deveria estar aposentado');
    }
    return 70 - $idade;
}

$idadesAvaliadas = [15, 30, 60, 80];

foreach($idadesAvaliadas as $idade) {
    try {
        $tempRestante = calcularTempoAposentadoria($idade);
        print "Idade: $idade, $tempRestante anos restantes <br>";
    } catch(faixaEtariaException $e) {
        print "Não foi possível calcular para $idade anos. <br>";
        print "Motivo: {$e->getMessage()} <br>";
    }
}