<?php
    //if statement = if some condition is true, do something
    //               if condition is false, dont do it
    // $age= 15;
    // if ($age >=18){
    //     echo"You may enter this site";
    // }
    // elseif($age>=65){
    //     echo"You can also enter this site";

    // }
    // else{
    //     echo"You may not enter this site";
    // }
    $hours=40;
    $rate=15;
    $weekly_pay=null;
    if($hours <= 40){
        $weekly_pay= $hours * $rate;
    }
    echo"You made {$weekly_pay} this week";
?>