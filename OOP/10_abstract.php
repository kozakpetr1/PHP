<?php

/*
===========================================
PHP TUTORIAL 10
Abstraktní třídy (abstract)
===========================================

Cíle:
- pochopit, co je abstraktní třída
- naučit se používat abstract metody
- porozumět rozdílu mezi class, abstract a interface
- pochopit, proč nelze vytvořit instanci abstraktní třídy
*/


// --------------------------------------------------
// Abstraktní třída
// --------------------------------------------------

// Abstraktní třídu nelze přímo vytvořit (nelze použít new)
abstract class Animal
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    // Abstraktní metoda – nemá tělo (implementaci)
    abstract public function makeSound();

    // Běžná metoda – má implementaci
    public function introduce()
    {
        return "Jsem zvíře jménem " . $this->name;
    }
}


// --------------------------------------------------
// Potomci musí implementovat abstraktní metody
// --------------------------------------------------

class Dog extends Animal
{
    public function makeSound()
    {
        return "Haf!";
    }
}

class Cat extends Animal
{
    public function makeSound()
    {
        return "Mňau!";
    }
}


// --------------------------------------------------
// Použití
// --------------------------------------------------

// Nelze:
// $animal = new Animal("Neznámé"); // ❌ chyba

$dog = new Dog("Rex");
$cat = new Cat("Micka");

echo $dog->introduce();
echo " a říkám: " . $dog->makeSound();

echo "<br>";

echo $cat->introduce();
echo " a říkám: " . $cat->makeSound();

