
<?php
echo "<h2>PHP  Example</h2>";

// String
$name = "mane";
echo "String: ";
var_dump($name);
echo "<br><br>";

// Integer
$age = 21;
echo "Integer: ";
var_dump($age);
echo "<br><br>";

// Float/Double
$height = 5.9;
echo "Float: ";
var_dump($height);
echo "<br><br>";

// Boolean
$isStudent = true;
echo "Boolean: ";
var_dump($isStudent);
echo "<br><br>";

// Array
$languages = array("PHP", "Java", "Python");
echo "Array: ";
var_dump($languages);
echo "<br><br>";

// Object
class Car {
    public $brand = "Tata";
}
$car1 = new Car();
echo "Object: ";
var_dump($car1);
echo "<br><br>";

// NULL
$emptyVar = null;
echo "NULL: ";
var_dump($emptyVar);
echo "<br><br>";


?>
