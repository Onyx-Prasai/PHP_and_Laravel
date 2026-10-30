<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action= "setnemptyfunction.php", method=post>
        <label>Username</label>
        <input type="text", name="username">
        <br>
        <label>Password</label>
        <input type="password", name="password">
        <br>
        <input type="submit", value="login">
    </form>
</body>
</html>
<?php
$username=$_POST["username"];
$password=$_POST["password"];
if(empty($username)){
    echo"No Username is there currently";
}
else if(empty($password)){
    echo"Please type a password";
}
else{
    echo "Username: ".$username. "<br>";
    echo "Password: " .$password. "<br>";

}

//isset()= Returns TRUE if a variable is declared and not null
//empty()= Returns TRUE if a variable is not declared, false, null, ""
// $username = "Onyx Prasai";
// $user= Null;
// echo isset($username);
// echo empty($user);
// if(isset($username)){
//     echo "This variable is set";
// }
// else{
//     echo "This variable is not set";
// }
//if the variable is not set the simply it gives the else statement answer or just false value 
?>