<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action= "Excersise2.php" method="post">
    <label>Number</label>
    <input type= "text", name= "number">
    <br>
    <input type="submit" value="Calculate">
</form>
</body>
</html>
<?php
$number= $_POST["number"];
$temp=1;
if($number==0){
    echo "The factorial is 1 <br>";
}
else{
for($i=1;$i<=$number;$i++){
    $temp=$i*$temp;
}
echo "The factorial is $temp <br>";
}
?>