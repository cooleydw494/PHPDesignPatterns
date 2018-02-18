<?php

class Dispatcher {

  private static $instance = null;
  private static $listeners = [];

  // public static function getInstance()
  // {
  //   if (static::$instance == null) {
  //     static::$instance = new static;
  //   }
  //   return static::$instance;
  // }

  public static function subscribe($object, $subscriber)
  {
    $id = spl_object_hash($object);
    static::$listeners[$id][] = $subscriber;
  }

  public static function publish($object, $i)
  {
    $id = spl_object_hash($object);

    if (isset(static::$listeners[$id])) {
      foreach(static::$listeners[$id] as $listener)
      {
        $listener->addOneAndEcho($i++);
      }
    }
  }

}
