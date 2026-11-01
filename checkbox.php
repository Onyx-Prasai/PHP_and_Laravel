<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkbox.php" method="post">
        <input type= "checkbox" name="foods[]" value="Pizza">
        Pizza<br>
        <input type= "checkbox" name="foods[]" value="Hamburger">
        Hamburger<br>
        <input type= "checkbox" name="foods[]" value="Taco">
        Taco<br>
        <input type= "submit" value="submit" name="submit">
    </form>
</body>
</html>
<?php
// if(isset($_POST["submit"])){
//     if(isset($_POST["pizza"])){
//         echo "You will be having your pizza in few minutes". "<br>";
//     }
//     if(isset($_POST["hamburger"])){
//         echo "You will be having your hamburger in few minutes". "<br>";
//     }
//     if(isset($_POST["taco"])){
//         echo "You will be having your taco in few minutes". "<br>";
//     }
//     else{
//         echo "starve or choose one of the above check boxes.";
//     }

// }
if(isset($_POST["submit"])){
    $foods= $_POST["foods"];
    foreach ($foods as $food){
        echo $food . "<br>";
    }
}

?>