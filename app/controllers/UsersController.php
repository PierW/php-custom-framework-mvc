<?php

namespace App\Controllers;

use App\Core\App;

class UsersController {


  public function index()
  {
    $title = "Users - TodoList";

    $users = App::get('database') -> selectAll('users');

    return view('users', compact(['users', 'title']));
  }


  public function store()
  {
    App::get('database') -> insert('users', [

      'name' => $_POST['name']

    ]);

    header('Location: /users');

  }


}
