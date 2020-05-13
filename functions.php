<?php
/*
 *  HELPER GLOBAL FUNCTIONS
 *
 *
 */

function dd($data){
  echo "<pre>";
  die(var_dump($data));
  echo "</pre>";
}

function view($name, $data = [])
{
  extract($data);

  return require "app/views/{$name}.view.php";
}
