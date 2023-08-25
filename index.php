<?php
class Calco {
    public function add($num1,$num2){
        $sum = $num1 + $num2;
        $product = $num1 * $num2;
    }
}
$calco = new Calco();
echo $calco->add(sum);