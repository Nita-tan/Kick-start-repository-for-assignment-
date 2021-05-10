<?php

  $array = [2, 3, 4, 6, 7, 9, 11, 20];
// PHP function to check for even elements in an array
function Even($array)
{
    // returns if the input integer is even
    if($array%2==0)
       return TRUE;
    else 
       return FALSE; 
}
  //execute the array filter to define the even number
$result=array_filter($array);
print_r(array_filter($result, "Even"));
?>