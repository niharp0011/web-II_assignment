<!-- 16. Write a PHP program to create a function that prints your name and college name. -->

<?php 

function MyInfo($name, $college) {
    return "Name: " . $name . "<br>College: " . $college;
}

$name = "Nihar Patel";
$college = "Gujarat University";
echo MyInfo($name, $college);

echo "<br><br>";

echo MyInfo("Narendra Modi", "Gujarat University");


?>