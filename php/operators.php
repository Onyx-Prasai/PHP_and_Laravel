<?php
//Arithmetic operators
// + - * / ** %

// Increment/ decrement operator
//++, --

//Operator Precedence
// ()
// **
// * / %
// + -
$x= 10;
$y= 2;
$z= null;

//$z= $x+$y;
//$z= $x **$y;
//$z= $x-$y;
$z= $x%$y;
echo "$z<br>";

//Increment/ Decrement operators
$counter=0;
$counter++;
echo "$counter <br>";
$counter+=2;
echo "$counter <br>";
$total=1+2-3*4/ 15625;
echo "$total <br>";

?>