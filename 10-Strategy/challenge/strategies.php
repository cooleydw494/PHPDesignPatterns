<?php

class NumberFilter {

  private $strategy = null;

  public function __construct($strategy)
  {
    $this->strategy = $strategy;
  }

  public function filter($num)
  {
    $result = $this->strategy->filter($num);
    if (!is_null($result)) {
      echo $num . PHP_EOL;
    }
  }

}

class EvenStrategy {

  public static function filter($num)
  {
    return $num % 2 == 0 ? $num : null;
  }

}

class OddStrategy {

  public static function filter($num)
  {
    return $num % 2 == 1 ? $num : null;
  }

}
