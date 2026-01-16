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

//reflection

/*One of the main challenges I faced during this assignment was forgetting an important step, which was instantiating a new instance of the object.I also struggled with how to properly broadcast the message because I kept getting errors. After looking at documentation, I realized that I needed to use the -> operator, which was something I had never seen before. This made it challenging to understand how to access properties and methods in PHP. Another challenge was understanding how PHP is both similar to and different from C#. It reminded me of C# in terms of using classes and objects and concatenation, but it also works differently in its own way, which took some time to adjust to. Additionally, the PDO code used to connect to the database was taken from example shown in class. We were told to either leave it blank or try to figure it out ourselves, but I wanted to mention that I would have found this part challenging as well. What I found easier was creating the class, defining the variables properties, instantiating a new object, adding comments, and using include and required. I was a bit confused at first about how these worked, but I understood them shortly after reviewing the instructions multiple times. Also need more clearfication on pdo */

//citation
//https://www.php.net/manual/en/language.types.object.php