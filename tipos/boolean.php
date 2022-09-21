<div class="titulo">Tipo Boolean</div>

<?php
// existem dois valores booleans apenas, true ou false. Eles não são case-sensitive.
print TRUE;
print '<br>';
print FALSE;
print '<br>' . var_dump(true);
print '<br>' . var_dump(False);
print '<br>' . is_bool(False);
print '<br>' . is_bool('False'); // usando boolean com PHP, ele não retorna nada, nem mesmo o 0

# Fazer as regras de conversões
print '<p>Regras:</p>';
print '<br>' . var_dump((bool) 0); // Apenas 0 é considerado false quando convertido para boolean
print '<br>' . var_dump((bool) 1);
print '<br>' . var_dump((bool) -2);
print '<br>' . var_dump((bool) 0.0000001);
print '<br>' . var_dump((bool) ""); // String vazia é falso
print '<br>' . var_dump((bool) " "); // Se inserir um único caracter, mesmo que seja um espaço, será TRUE.
print '<br>' . var_dump((bool) "0"); // Única exceção que existe é uma string que retorna 0
print '<br>' . var_dump((bool) "00"); // Agora, quando existe dois caracteres 0, retorna true.
print '<br>' . var_dump(!"false"); // Podemos negar uma situação, nesse caso será false
print '<br>' . var_dump(!!"false"); // Se negar a negação com dupla exclamação, você terá o efeito contrário, um true!



