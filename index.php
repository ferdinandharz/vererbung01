<?php

require_once('Car.php');
require_once('SportsCar.php');

// create an instance of the subclass
$sportsCar1 = new SportsCar();
  
// Set the value of the class’ property.
// For this aim, we use a method that we created in the parent
$sportsCar1->setModel('Mercedes Benz');
  
//Use another method that the child class inherited from the parent class
echo $sportsCar1->driveItWithStyle();

?>