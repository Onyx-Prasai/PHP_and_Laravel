<?php
//cookie=Information about a user stored in a user's web-browser
//targeted advertisements, browsing preferences, and 
//other non-sensitive data
setcookie("fav_food","Pizza",time()-0,"/");
setcookie("fav_drink","Water",time()+(86400*3),"/");

/*foreach($_COOKIE as $key=>$value){
    echo "{$key}={$value}<br>";
    
}
    */
    if(isset($_COOKIE["fav_food"])){
        echo"BUY SOME {$_COOKIE["fav_food"]} !!!";
}
else{
    echo "I dont know your favourite food";
}
?>