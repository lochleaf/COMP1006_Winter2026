<?php
declare (strict_types=1);


//3. Variables, Data Tyoes, Concatenation, Conditional Statements & Echo

$firstName = "Jessica Gilfillan"; //stream_set_blocking
$lastName = "Gilfillan"; //string
$age = 40; //int
$isInstructor = true; //boolean;

echo "<p> Hello there, my name is " . $firstName . " " . $lastName . "</p>";

if ($isInstructor) {
    echo "<p> I am your teacher <p>";
}
else {
    echo "<p> Opps, teach didnt show! </p>";
}

//4. Loosely Typed Language Demo

$num1 = 1;
$num2 = "10";

function add(int $num1, int $num2) : int {
    return $num1 + $num2;
}

echo "<p>" . add($num1, $num2) . "</p>";

//5. Strict Types & Types Hints


//6. OOP with PHP 

//create the class
class Person {
    public string $name;
    public int $age;
    public bool $isInstructor;
}
