<?php
// session = Super Global Variable used to store information on a user
// to be used across multiple pages.
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="session.php" method="post">
        Username:
        <input type="text" name="username"><br>
        Password:
        <input type="password" name="password"><br>
        <!-- Removed the trailing space from name="login" -->
        <input type="submit" name="login" value="login"><br>
    </form>
</body>
</html>
<?php
if(isset($_POST["login"])){
    // Fixed to check both username and password
    if(!empty($_POST["username"]) && !empty($_POST["password"])){
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

        echo $_SESSION["username"] . "<br>";
        echo $_SESSION["password"] . "<br>";
        header("Location: home.php");
    } else {
        echo "Missing username/password <br>";
    }
}
?>