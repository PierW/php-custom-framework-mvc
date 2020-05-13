<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\Task;

class PagesController {


  public function home()
  {
    $tasks = App::get('database') -> selectAll('todos');

    $tasks = array_map(function($task){
      $t = new Task();
      $t -> id = $task -> id;
      $t -> description = $task -> description;
      $t -> completed = $task -> completed;
      return $t;
    }, $tasks);


    return view("index", compact('tasks'));

  }


  public function about()
  {

    $title = "About Us - TodoList";

    return view("about", compact('title'));

  }


  public function contact()
  {

    $title = "Contact - TodoList";

    return view("contact", compact('title'));

  }

}
