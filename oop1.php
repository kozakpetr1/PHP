<?php

class Fruit {
	public $name;
	public $color;

	public function __construct($name, $color) {
		$this -> name = $name;
		$this -> color = $color;
	}
	public function get_name() {
		return $this -> name . "<br>";
	}
	public function get_color() {
		return $this -> color . "<br>";
	}
}

$apple = new Fruit("Apple", "red");
echo $apple -> get_name();
echo $apple -> get_color();
