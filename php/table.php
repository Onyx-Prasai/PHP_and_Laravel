<?php
//create table using php my admin
include("database.php");
$username= "partick";
$password="rock";
$hash=password_hash($password,PASSWORD_DEFAULT);
$sql="INSERT INTO users (user, password)
                    VALUES ('$username','$hash')";
                    
try{
    mysqli_query($conn, $sql);
echo "User is now regestered";
}
catch(mysqli_sql_exception){
    echo "Could not register user";
}

?>