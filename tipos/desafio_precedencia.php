<div class="titulo">Desafio Precedência</div>

<?php
print '<p>1. Qual valor será impresso?</p>';
print 2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 3); // resposta: INF

print '<p>2. Qual expressão imprime o valor 100?</p>';
print 'a)' . (1 + 2) * 20 - 15 . '<br>'; // resultado: 45
print 'b)' . 4 * 5 ** 2 . '<br>'; // resposta correta
print 'c)' . 2 ** 3 ** 4 / 1e25 . '<br>'; // resposta: 0.24178516392293
print 'd)' . 3 + (3 * 8) / 2 - 3 . '<br>'; // resposta: 12
