<?php

class Car{
	// private property $model
	private $model;
	
	// public setter for $model
	public function setModel($model){
		$this -> model = $model;
	}
 
	// public output method
	public function hello(){
		return "beep! I am a <i>" . $this -> model . "</i><br />";
	}
}

?>