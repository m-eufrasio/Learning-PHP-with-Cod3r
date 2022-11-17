<?php namespace Outro\Nome; ?>
<div class="titulo">Use/As</div>

<?php
print __NAMESPACE__ . '<br>';

require('use_as_arquivo.php');

function soma() 
{
    return $a . $b; // function criada para conflitar propositalmente.
}

class Classe 
{
    public $var;

    function func()
    {
        print __NAMESPACE . ' -> ' . __CLASS__ . ' -> ' . __METHOD__ . '<br>';
    }
}