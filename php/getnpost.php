<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="getnpost.php" method="post">
   <label>Username: </label><br>
   <input type="text" name="username"><br> 
    <label>password: </label><br>
   <input type="password" name="password"><br>
   <input type="submit" value="Login"> 
   <br>
    </from>
</body>
</html>
<?php
// echo"The usernames are: ";
// echo $_GET["username"];
// echo"<br>";
// echo"The passwords are: ";
// echo $_GET["password"];
echo $_POST["username"];
echo"<br>";
echo $_POST["password"];
// $_Get, $_Post= special variables used to collect data from an HTML from 
//              data is sent to the file in the action attribute of <form>
//              <form action ='some_file.php" method='get'>

/* $_GET= Data is appended to the url
Not Secure
char limit
Bookmark is possivle w/ values
Get request can be cached
Better for a search page

$_POST= Data is packaged inside the body of HTTP request
MORE SECURE
No data limit 
Cannot bookmark 
Get requests are not cached
Better for submitting credentials*/
?>