<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <form action="orderpage.php" method="get">
        <label>quantity: </label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total"> 
</form>
</body>
</html>
<?php
// $item="pizza";
// $price=5.99;
// $quant=$_POST["quantity"];
// $total=null;
// $total= $quant*$price;
// echo"You have ordered {$quant} x {$item}/s <br>";
// echo"Your total value is: \${$total}";
$item="pizza";
$price=5.99;
$quant=$_GET["quantity"];
$total=null;
$total= $quant*$price;
echo"You have ordered {$quant} x {$item}/s <br>";
echo"Your total value is: \${$total}";
?>