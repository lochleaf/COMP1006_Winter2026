<?php
declare (strict_types=1);

//made class for car and it properties 
class auto {

//variables for the car

public string $brand = "Toyota";
public string $model = "Camry";
public string $year = "2012";
public string $color = "blue";
}

//Instantiate a new instance
$car = new auto();

//getting the variables from the class to output the strings
echo "<p> {$car->brand} {$car->model} {$car->year} {$car->color} </p>";

