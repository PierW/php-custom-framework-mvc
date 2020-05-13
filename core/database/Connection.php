<?php

namespace App\Core\Database;

use PDO;
use PDOException;

class Connection {

  public static function make($config)
  {

    $dsn = "mysql:dbname={$config['name']};host={$config['host']}";
    $user = $config['username'];
    $password = $config['password'];
    $pdoOptions = $config['options'];

    try{

      return new PDO($dsn, $user, $password, $pdoOptions);

    } catch(PDOException $e){

      die('Impossibile Connettersi... Errore: ' . $e -> getMessage());

    }

  }

}
