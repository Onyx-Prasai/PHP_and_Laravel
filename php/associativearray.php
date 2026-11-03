<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associativearray.php", method="post">
        <label>Country</label>
        <input type="Text", name="country"><br>
        <input type="Submit", value="Submit"><br>
    </form>
</body>
</html>
<?php
    //associative array= An array made of key=> value pairs

    //countries => capitals
    // id => username
    // item => price
    $capitals = array("USA"=>"Washington D.C.",
            "Japan"=>"Kyoto", 
                "South Korea"=>"Seoul",
                    "Nepal"=>"Kathmandu");
    $keys= $_POST["country"];
    // $capitals["USA"]="Las Vegas";
    //This adds new associative pair $capitals["China"]="Beijing";
    //array_pop($capitals);
    //array_shift($capitals);
    // $like=array_keys($capitals);
    // foreach($like as $ki){
    //     echo "{$ki} <br>";
    // }
    //similar with every values?
    //the array flip flips the key and value pairs
    //to reverse the order we use the reverse function
    //echo count($capitals). "<br>";
    echo "The capital is {$capitals["$keys"]}";
    


?>