<?php

class FizzBuzz {

  public function get($min=1, $max=20){
    $return = [];

    if (!is_numeric($min) || !is_numeric($max)){
      return "Error: Not a valid number.";
    }
    if ($max < $min){
      return "Error: Max input is less than the min.";
    }

    for ($i = $min; $i <= $max; $i++) {
      if ($i % 15 == 0) {
        $return[] = "fizzbuzz";
      } elseif ($i % 3 == 0) {
        $return[] = "fizz";
      } elseif ($i % 5 == 0) {
        $return[] = "buzz";
      } else {
        $return[] = $i;
      }
    }

    $return = implode(" ", $return);

    return $return;
  }
}