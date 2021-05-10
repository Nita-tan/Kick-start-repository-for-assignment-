<?php

require("index.php");
class setSale {
    private $data = [];
    public function addtosale(Transaction $transaction){
        $this->data[] = $transaction; 
    }
    public function displayTransaction($method){
        $number = 0; 
        for($i = 0; $i < count($this->data); $i++){
            if($this->data[$i]->method() == $method){
                $number ++;
            }
        }
        return $number; 
    }
    public function displayABA() {
        return $this->displayTransaction("ABA");
    }
    public function displayWingAndPipay(){
        return $this->displayTransaction("Wing") + $this->displayTransaction("Pipay"); 
    }
    public function displayOrdering(){
        usort($this->data, function($a, $b) {
            return $a->getTotalPerOrder()<$b->getTotalPerOrder() ?1:-1;
           
        });
       
        echo "
        <table style=\"width:30%;\">
        <td style=\"border:1px solid black\">Name</td>
        <td style=\"border:1px solid black\">Price</td> 
        <td style=\"border:1px solid black\">Quantity</td>
        <td style=\"border:1px solid black\">Method</td>
        <td style=\"border:1px solid black\">Total</td>
        "; 
  
        for($i = 0; $i < count($this->data); $i++){
            $this->data[$i]->displayInfo(); 
            
        }
    }
}

?>