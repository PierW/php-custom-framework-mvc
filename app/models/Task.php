<?php

namespace App\Models;

class Task
{

  public $description;
  public $completed = false;

  public function complete()
  {
    $this -> completed = true;
  }

  public function isCompleted()
  {
    return $this -> completed;
  }

  public function setStatus(bool $bool)
  {
      $this -> completed = $bool;

  }

}
