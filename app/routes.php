<?php

// $router -> define([
//   "" => "controllers/index.php",
//   "about" => "controllers/about.php",
//   "contact" => "controllers/contact.php",
//   "names" => "controllers/add-name.php"
// ]);

$router -> get("", "PagesController@home");
$router -> get("about", "PagesController@about");
$router -> get("contact", "PagesController@contact");

$router -> get("users", "UsersController@index");

$router -> post("users", "UsersController@store");
