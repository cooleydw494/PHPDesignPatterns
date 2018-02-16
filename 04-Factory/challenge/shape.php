<?php

class Shape {

  public static function getShape($type, $size)
  {
    switch ($type)
    {
      case 'circle':
        return new Circle($size);
      case 'square':
        return new Square($size);
    }
  }

}

class Circle {

  private $size = 0;

  public function __construct($size)
  {
    $this->size = $size;
  }

  public function getArea()
  {
    return pow($this->size, 2) * M_PI;
  }

}

class Square {

  private $size = 0;

  public function __construct($size)
  {
    $this->size = $size;
  }

  public function getArea()
  {
    return pow($this->size, 2);
  }

}
