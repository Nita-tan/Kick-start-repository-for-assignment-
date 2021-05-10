<?php
abstract class Method{
    abstract public function payment(Transaction $transaction, $price); 
}

class ABA extends Method {
    public function payment(Transaction $transaction, $price){
        $price->addtosale($transaction); 
    }
}
class WING extends Method {
    public function payment(Transaction $transaction, $price){
        $price->addtosale($transaction); 
    }
}

class PIPAY extends Method {
    public function payment(Transaction $transaction, $price){
      $price->addtosale($transaction);  
    }
}


?>