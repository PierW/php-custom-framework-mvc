<?php

namespace App\Core;

use Exception;

class Router{

  public $routes = [

    'GET' => [],
    'POST' => []

  ];

  public static function load($file)
  {
    // NOTE: il require $file si aspetta la variabile $router e dobbiamo renderla disponibile.
    // La funzione statica è come un metodo globale da poter chiamare sempre, non è un metodo di istanza (Istance Method)
    // se voglio un istance router ho bisogno della parola magica static o self.

    $router = new static();  // E' come dire: new Router()

    require $file;

    return $router;

  }

  public function define($routes)
  {
    $this -> routes = $routes;
  }


  public function get($uri, $controller)
  {
    $this-> routes['GET'][$uri] = $controller;
  }


  public function post($uri, $controller)
  {
    $this-> routes['POST'][$uri] = $controller;
  }


  public function direct($uri, $requestType)
  {
    // contact
    if (array_key_exists($uri, $this -> routes[$requestType])){

      // return $this -> routes[$requestType][$uri];
      //RESULT: PagesController@contact

      return $this -> callAction(

        // NOTE: L'explode mi restituisce un array [0] => "PageController" [1] => "contact"
        // il metodo callAction vuole 2 parametri in ingresso come stringa in questo caso
        // ci torna utile lo splat operator "..." da php 5.6 in su.
        ...explode("@", $this -> routes[$requestType][$uri])

      );

    }

    throw new Exception('Nessuna rotta definita per questo URI.');
  }

  protected function callAction($controller, $action)
  {

    $controller = "App\\Controllers\\{$controller}";

    $controller = new $controller;

    if (!method_exists($controller, $action)) {
      throw new Exception(
        "{$controller} non risponde al metodo: {$action}."
      );
    }

    return $controller -> $action();

  }

}
