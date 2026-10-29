<?php
// variables in php
$name = "Onyx Prasai";
$age = 20;
$email="onyx@gmail.com";

echo "<h2>My name is {$name} and I am {$age} years old<br></h2>";
echo "My email is {$email}<br>";

$users= 2;

echo "There are two users in the system<br>";

$taxrate= 0.13;
echo "The tax rate is {$taxrate}<br>";
$gpa=3.61;
echo "Your gpa is {$gpa}<br>";
$employeed =true;
$online = false;
$for_sale=true;
echo"Online status: {$online}<br>";
$earning_per_month=200000;
echo"Your tax that you need to pay is {$taxrate} x {$earning_per_month}<br>";
$total= $taxrate * $earning_per_month;
echo "You toal is: Rs.{$total}";
?>