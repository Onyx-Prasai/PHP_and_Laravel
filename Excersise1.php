<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Excersise1.php" method="post">
        <label> Radius </label>
        <input type="text" name="radius"><br>
        <input type="submit" value="Calculate">

    </form>
</body>
</html>
<?php
$radius=$_POST["radius"];
$Area=NULL;
$Circumference=NULL;
$Volume=NULL;
$Area=$radius**2*pi();
$Circumference=$radius*2*pi();
$Volume=(1/3)*pi()*$radius**3;
echo "The area is {$Area} <br>";
echo "The circumference is {$Circumference} <br>";
echo "The volume is {$Volume} <br>";
?>