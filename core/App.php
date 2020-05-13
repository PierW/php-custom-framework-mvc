<?php

namespace App\Core;

use Exception;

class App {

  protected static $registry = [];


  public static function bind(string $key, $value)
  {
    // NOTE: non essendo un istanza ma un metodo statico non possiamo fare una cosa di questo genere: $this -> registry

    static::$registry[$key] = $value;

  }

  public static function get(string $key)
  {

    if (! array_key_exists($key, static::$registry)) {

      throw new Exception("{$key} non è stata trovata nel Container.");
    }

    return static::$registry[$key];

  }
}
