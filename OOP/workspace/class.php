<?php

class Snake
{
    private $name;
    private $length;

    public function __construct($name, $length)
    {
        $this->name = $name;
        $this->length = $length;
    }

    public function slither()
    {
        return "Sss... Jsem had jménem " . $this->name . " a mám délku " . $this->length . " metrů.";
    }
}

$s1 = new Snake("Kobra", 2);
$s1_clone = clone $s1; // Vytvoření kopie objektu
$s2 = new Snake("Python", 2);
echo $s1->slither();
echo "<br>";
echo $s2->slither();
echo "<br>";
