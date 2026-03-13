<?php

class Fruit {
	public $name;
	public $color;

	public function __construct($name = "Fruit", $color = "blue") {
		$this -> name = $name;
		$this -> color = $color;
	}
	public function set_name($name) {
		$this -> name = $name;
	}
	public function set_color($color) {
		$this -> color = $color;
	}
	public function get_name() {
		return $this -> name . "<br>";
	}
	public function get_color() {
		return $this -> color . "<br>";
	}
}

$apple = new Fruit(name: "Apple", "red");
$apple -> set_name("Banana");
$apple -> set_color("yellow");
echo $apple -> get_name();
echo $apple -> get_color();

