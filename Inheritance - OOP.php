<?php


/// OOP = Object Oriented Programming (in PHP)
/// class (characteristics of anything)

class Car{
	public $name;
	public $color;
	public $price;

	public function __construct($p_name, $p_color, $p_price)
	{
		$this->name = $p_name;
		$this->color = $p_color;
		$this->price = $p_price;
	}
	public function message()
	{
		echo "This is a message {$this->name}" . "\n";
	}
}

class ToyotaCar extends Car{

	public $model;

	public function set_model($p_model)
	{
		$this->model = $p_model;
	}

	public function __destruct()
	{
		echo "The model name is {$this->name}" . "\n";
	}
}

class HiluxToyota extends ToyotaCar{
	
}

$hilux = new HiluxToyota("HiluxCar", "black", 10000000);
//$toyota->introduction();

?>