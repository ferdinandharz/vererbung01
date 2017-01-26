<?php

require_once('Car.php');
require_once('SportsCar.php');

// create an instance of the subclass
$sportsCar1 = new SportsCar();
  
//Use another method that the child class inherited from the parent class
echo $sportsCar1->hello();

?>