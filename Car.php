<?php

class Car{
	// private property $model
	private $model;
	
	// public setter for $model
	public function setModel($model){
		$this->model = $model;
	}
 
	// public getter for $model
	public function getModel(){
		return $this->model;
	}
}

?>