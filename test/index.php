<?php
// indexed array
$cars = array("Volvo", "BMW", "Toyota");
// dumps info about the array
var_dump($cars);
// access a specific value
echo "<br/>";
echo "First car: $cars[0] <br/>";
// changing a value
$cars[0] = "Tesla";
echo "First car: $cars[0] <br/>";

// associative array
// "key" => "value"
$student = array(
    "studentId" => "523370",
    "studentName" => "Kyle Gian L. Latina",
    "studentProgram" => "IT",
    "hobbies" => array("Playing", "Eating", "Sleeping")
    );
// dumps info about the array
var_dump($student);
// access a specific value
echo "<br/>";
echo $student["studentProgram"] . "<br/>";
// changing a value
$student["studentProgram"] = "Agriculture";
echo $student["studentProgram"] . "<br/>";

// multidimensional array
$mult = array(
    array("Volvo", 22, 15), // indexed
    array(
        "brand" => "BMW",
        "stocks" => 15,
        "sold" => 12,
        "regions" => array("North America", "Asia", "Europe")
    ), // associative
);
var_dump($mult);
// access a value
echo $mult[0][0] . "<br/>"; // Volvo
echo $mult[1]["brand"] . "<br/>"; // BMW
echo $mult[1]["regions"][1] . "<br/>"; // Asia
?>