<div class="titulo">Interface</div>

<?php
interface Animal {
  function respirar();
}

interface Mamifero {
  function mamar();
}

interface Canino extends Animal, Mamifero { // Interfaces podem herdar de outra
  function latir(): string;
}

class Cachorro implements Canino {
  function respirar() {
    return "Irei usar oxigênio!";
  }

  function latir(): string {
    return "Au Au";
  }

  function mamar() {
    return "Irei usar leite!";
  }
}

$animal = new Cachorro();
print $animal->respirar() . '<br>';
print $animal->latir() . '<br>';
print $animal->mamar() . '<br>';

print "<br>";
print var_dump($animal);

print "<br>";
print var_dump($animal instanceof Cachorro); // instanceof é um modo de validar se o objeto é instância de algo.
print var_dump($animal instanceof Canino);
print var_dump($animal instanceof Mamifero);
print var_dump($animal instanceof Animal);

/* Toda interface em PHP precisa ter métodos, no qual não podem ser privates
* e nem protected, por padrão são public e não precisa inserir a palavra
* reservada. A interface é composta basicamente de métodos e que são por
* obrigação usados por outras classes que implementam essa interface.
*
* PODE ACONTECER:
* Interface extender de outra intereface;
* Classe implementando de multiplas interfaces;
* 
* NÃO PODE ACONTECER:
* Classes extendendo multiplas classes, obrigatoriamente herda apenas de uma classe.
*/
