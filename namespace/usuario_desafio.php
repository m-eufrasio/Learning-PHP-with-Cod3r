<?php

namespace Usuario;
use \Pessoa\Pessoa;

Class Usuario extends Pessoa
{
    public $login;

    function __construct($nome, $idade, $login)
    { 
      $this->nome = $nome;
      $this->idade = $idade;
      $this->login = $login;
      print "Usuário criado! <br>";
    }
  
    function __destruct()
    {
      print "<br> Destrutor da subclasse Usuario.";
      parent::__destruct();
    }
    
    function apresentar()
    {
      print "@{$this->login}: {$this->nome}, {$this->idade} anos <br>";
      print "@{$this->login}:";
      parent::apresentar();
    }
  }
