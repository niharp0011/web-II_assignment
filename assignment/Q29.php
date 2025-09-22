<!-- 29. Write a PHP program using foreach() to display student details stored in an associative array. -->

<?php
$student = array(
    "Name"   => "Amit Sharma",
    "Age"    => 21,
    "Course" => "B.sc IT",
    "Grade"  => "A"
);

echo "Student Details:<br>";
foreach ($student as $key => $value) {
    echo $key . ": " . $value . "<br>";
}

?>
