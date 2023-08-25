<?php
class Calco {
  public function add($num1, $num2) {
    return $num1 + $num2;
  }

  public function subtract($num1, $num2) {
    return $num1 - $num2;
  }

  public function multiply($num1, $num2) {
    return $this->add($num1, $num2) * $num2;
  }
  public function divide($num1, $num2) {
    return $this->substract($num1, $num2) / $num2;
  }
  public function remainder($num1, $num2) {
    return $this->divide($num1, $num2) % $num2;
  }
}

$calco = new Calco();
echo $calco->add(2, 3);