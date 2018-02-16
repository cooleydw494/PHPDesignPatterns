<?php

// use Illuminate\Database\Eloquent\Model as Model;

class Post {

  public function __construct($parameters = [])
  {
  }

  public static function create($parameters = []) {
    $post = new Static;
    foreach ($parameters as $key => $value) {
      $post->$key = $value;
    }
    return $post;
  }

}
