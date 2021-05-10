<?php

//call funtion for reversing "emocleW ot PHP" backward 
function string($reverse) {

    $streverse = strrev($reverse); //revers string backward
    $splitstring = explode(" ", $streverse); //separate the text into array
    
    $result = "";
    $countstr = count($splitstring);  //count the length of the string
    //using for loop with the given array length to execute the result 
    for($i =$countstr - 1; $i >= 0; $i--) {
        $result = $result .  $splitstring[$i];
        $result = $result . " ";
    }
    //execute the variable 
    return $result;
}
// assign a string 
echo string("emocleW ot PHP");
?>
