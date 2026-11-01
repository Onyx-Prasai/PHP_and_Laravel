<?php
$username="Onyx Prasai";
$phone="1234567890";
// $username=strtolower($username);
// $username=strtoupper($username);
// $username=trim($username); //it removes the whitespaces
// $username=str_pad($username, 20, "0");
// $username=str_replace("1","/", $phone);
// $username= strrev(username);
// $username=str_shuffle($username);
// $equals=strcmp($username,"Onyx Prasai");
// $username=strlen($username); // counts no of characters
// $index = strpos($phone,"3");
// $firstname= substr($username, 0, 4);//it is used to create a new stirng from an existing string
$fullname=explode(" ", $username);//takes string and creates arrary out of them 
//reverse of explode is implode() array.(..) to ... it converts array to one 
foreach($fullname as $name){
echo $name ."<br>";
}
?>