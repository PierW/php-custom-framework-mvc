<?php

namespace App\Core\Database;

use PDO;
use PDOException;

class QueryBuilder{

  protected $pdo;


  public function __construct(PDO $pdo)
  {
    $this -> pdo = $pdo;
  }

  public function selectAll($table)
  {
    $statement = $this -> pdo -> prepare("SELECT * FROM {$table}");
    $statement -> execute();
    return $statement -> fetchAll(PDO::FETCH_CLASS);
  }

  public function insert(string $table, array $parameters)
  {
    $keys = array_keys($parameters);

    /*
    * Named placeholder:
    *
    *     $data = [
    *       'name' => $name,
    *       'age' => $age
    *     ];
    *
    *     insert into users (name, age) values (:name, :age)
    */

    $sql = sprintf(
      'insert into %s (%s) values (%s)',
      $table,
      implode(', ' , $keys),
      ":" . implode(', :' , $keys)
    );

    try{

      $statement = $this -> pdo -> prepare($sql);

      // Inseriamo l'array parameters in execute per combinare i placeholders con i valori
      $statement -> execute($parameters);

    } catch (PDOException $e){

      die("Ops... qualcosa è andato storto.");

    }

  }


}
