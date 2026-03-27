<?php

/*
===========================================
PHP TUTORIAL 07
Rozhraní (interface)
===========================================

Cíle:
- pochopit, co je rozhraní (interface)
- naučit se definovat metody bez implementace
- implementovat rozhraní ve třídě
- pochopit princip „smlouvy“
*/


// --------------------------------------------------
// Definice rozhraní
// --------------------------------------------------

// Rozhraní obsahuje pouze názvy metod (bez těla)
interface Animal
{
    public function makeSound();
}


// --------------------------------------------------
// Třídy implementující rozhraní
// --------------------------------------------------

class Dog implements Animal
{
    public function makeSound()
    {
        return "Haf!";
    }
}

class Cat implements Animal
{
    public function makeSound()
    {
        return "Mňau!";
    }
}


// --------------------------------------------------
// Použití
// --------------------------------------------------

$dog = new Dog();
$cat = new Cat();

echo $dog->makeSound();
echo "<br>";
echo $cat->makeSound();

// Rozhraní zajišťuje, že všechny třídy implementují stejné metody
// → usnadňuje práci s různými objekty stejného typu (polymorfismus)