<?php

class Decorator {

  public $sentence = '';

  public function lower()
  {
    return strtolower($this->sentence);
  }

  public function upperCase()
  {
    return strtoupper($this->sentence);
  }
}
