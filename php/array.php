<?php
//array="variable" which can hold more than one value at a time
// $food_1="apple";
// $food_2="orange";
// $food_3=["banana", "mango"];
$foods= array("apple", "orange", "banana", "coconut");
// echo $food_3[1] . "<br>";
// echo $foods[0];
//to change element in array
$foods[0]='pinapple';
//to push using push function array_push(,)
array_push($foods,"pinapple","kiwi" );
//to remove the last element in array we use pop array_pop
array_pop($foods);
//sift removes first array_shift
array_shift($foods);
//we can reverse an array using array_reverse
$reverse=array_reverse($foods);
 foreach($foods as $food){
    echo $food. "<br>";
 }
 echo "In reverse order it is given as: <br>";
 foreach($reverse as $rev){
    echo $rev. "<br>";
 }
 //count function is used to count 
 echo count($foods);
?>