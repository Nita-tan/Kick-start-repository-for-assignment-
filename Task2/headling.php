<!DOCTYPE html>
<html leng="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Sale of payment method</title>
</head>

<body>
    <?php
    require("sale.php");
    require("price.php");

    $price = new setSale();
    $aba = new ABA(); 
    $wing = new WING(); 
    $pipay = new PIPAY();  

    $aba->payment(new Transaction("item1",5,1,"ABA"), $price);
    $wing->payment(new Transaction("item2", 3,2,"Wing"), $price); 
    $aba->payment(new Transaction("item3",4,1,"ABA"), $price);
    $aba->payment(new Transaction("item4",5,1,"ABA"), $price);
    $pipay->payment(new Transaction("item5",6,1,"Pipay"),$price);
    $aba->payment(new Transaction("item6",10,1,"ABA"),$price);
    $wing->payment(new Transaction("item7", 15,1,"Wing"), $price); 
    $wing->payment(new Transaction("item8", 2,1,"Wing"), $price); 
    echo "<br>";
    echo "Number of sales by ABA : " . " " . $price->displayABA() ;
    echo "<br>";
    echo "Number of sales by WING and Pipay : " . " " . $price->displayWingAndPipay() ; 
    $price->displayOrdering() 

    ?>
</body>

</html>