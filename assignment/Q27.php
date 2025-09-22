<!-- 27. Write a PHP program to create an associative array of employee details (name, age, salary) and print them. -->

<?php

$employee = array(
    "name"   => "Rajesh Kumar",
    "age"    => 30,
    "salary" => 45000
);

echo "Employee Details:<br>";
echo "Name: " . $employee["name"] . "<br>";
echo "Age: " . $employee["age"] . "<br>";
echo "Salary: " . $employee["salary"] . "<br>";

?>
