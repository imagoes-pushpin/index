<?php
include 'Person.php';

// Create an instance of the Person class
$person = new Person("John", 25);

// Call methods from the class
echo "Name: " . $person->getName() . "\n";
echo "Age: " . $person->getAge() . "\n";
?>
