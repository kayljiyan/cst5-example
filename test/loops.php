<?php
$counter = 1;
// while loop
// while ($counter <= 10) {
//     echo "Count: $counter <br/>";
//     // increment
//     $counter++;
// }

// do while loop
// do {
//     echo "Count: $counter <br/>";
//     $counter++;
// } while ($counter <= 10);

// for loop
// for ($i=1; $i <= 10; $i++) { 
//     echo "Count: $i <br/>";
// }

// indexed array
$cars = array("Volvo", "BMW", "Toyota");
// $indexed as $element
// $associative as $key => $value
// foreach loop
foreach ($cars as $car) {
    echo "Brand: $car <br/>";
}

// associative array
// "key" => "value"
$student = array(
    "studentId" => "523370", // studentId: 523370
    "studentName" => "Kyle Gian L. Latina",
    "studentProgram" => "IT",
    //"hobbies" => array("Playing", "Eating", "Sleeping")
    );
foreach ($student as $key => $value) {
    echo "$key: $value <br/>";
}
?>