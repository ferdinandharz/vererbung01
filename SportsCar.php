<?php
require_once('Car.php');

class SportsCar extends Car {
	// private property in the childclass
	private $style = 'fast and furious';
 
	public function driveItWithStyle(){
		return 'Drive a '  . $this -> getModel() . ' <i>' . $this -> style . '</i>';
	}
}

?>