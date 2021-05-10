

<?php
function sum(...$numbers) {  //using function to support the length of  the argument 
  $total = 0;    //declare the integer 
  foreach($numbers as $n) {   //using foreach to loop through the value 
      $total+=$n;   //calculate the number that given 
    }
  return $total;   //show the result 
}
  
echo("Total Number is" . sum(2,3));
echo "<br>";
echo("Total Number is" .sum(2,3,4));
echo "<br>";
echo("Total Number is" .sum(2,3,4,5));
?>


