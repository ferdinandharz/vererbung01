<?php
require_once('Car.php');

class SportsCar extends Car {
	//Has no problem to get a protected property that belongs to the parent
	public function hello(){
		return "beep! I am a <i>" . $this -> model . "</i><br />";
	}
}

?>