<?php
class Point {
    public $x;
    public $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function __toString() {
        return "Point Object ( [x] => " . $this->x . " [y] => " . $this->y . " )";
    }
}
$point = new Point(10, 20);
echo $point; // Výstup: Point Object ( [x] => 10 [y] => 20 ] )