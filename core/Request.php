<?php

namespace App\Core;

class Request{

  public static function uri()
  {
    //http://localhost:8000/culture/prova/   -> /culture/prova/  -> culture/prova
    // return trim($_SERVER['REQUEST_URI'], '/');

    //Versione migliorata per casi come: names?parametro=valore
    return trim(

      parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'

    );


  }

  public static function method()
  {
    return $_SERVER['REQUEST_METHOD'];
  }
}
