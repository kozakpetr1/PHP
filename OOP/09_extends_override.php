<?php

/*
===========================================
PHP TUTORIAL 09
Dědičnost (extends, override)
===========================================

Cíle:
- pochopit princip dědičnosti (inheritance)
- naučit se používat extends
- porozumět použití protected
- přepisovat metody (override)
- používat parent::
*/


// --------------------------------------------------
// Rodičovská třída (Parent)
// --------------------------------------------------

class Person
{
    // protected – dostupné i v potomcích
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function introduce()
    {
        return "Jmenuji se " . $this->name;
    }
}


// --------------------------------------------------
// Potomci (Child classes)
// --------------------------------------------------

class Student extends Person
{
    private $school;

    public function __construct($name, $school)
    {
        // Volání konstruktoru rodiče
        parent::__construct($name);

        $this->school = $school;
    }

    // Přepsání metody (override)
    public function introduce()
    {
        return parent::introduce() . " a studuji na " . $this->school;
    }
}


class Teacher extends Person
{
    private $subject;

    public function __construct($name, $subject)
    {
        parent::__construct($name);

        $this->subject = $subject;
    }

    public function introduce()
    {
        return parent::introduce() . " a učím předmět " . $this->subject;
    }
}


// --------------------------------------------------
// Použití
// --------------------------------------------------

$student = new Student("Jan", "SPŠ IT");
$teacher = new Teacher("Novák", "Informatika");

echo $student->introduce();

echo "<br>";

echo $teacher->introduce();

