<?php
//hashing = transforming sensitive data (password)
// into letters, numbers, and/or symbols
//via a mathemetical process. (similar to encryption)
//hides the original data from 3rd parties.
$password="onyx123";
$hash=password_hash($password,PASSWORD_DEFAULT);
if(password_verify("onyx345",$hash)){
    echo "You are logged in!";
}
else{
    echo"Incorrect password";
}
?>