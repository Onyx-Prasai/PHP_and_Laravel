<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        username:<br>
        <input type="text" name="username">
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>
<?php
 if($_SERVER["REQUEST_METHOD"]=="POST"){
    echo "HELLO";
 }
//$_SERVER = SGB that contains headers, paths, and script locations.
// The entires in this array are created by the web server
// Shows nearly everything you need to know about the current web page env.
// foreach($_SERVER as $key => $value){
//     echo "{$key}={$value} <br>";
// }
?>