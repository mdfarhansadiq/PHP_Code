<?php
    // 1st Way to create associative array
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    echo "Peter is " . $age['Peter'] . " years old.";

    // 2nd Way to create associative array
    $age['Peter'] = "35"; 
    $age['Ben'] = "37";
    $age['Joe'] = "43";
    echo "Peter is " . $age['Peter'] . " years old.";

    
?>