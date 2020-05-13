<?php

use App\Core\App as Application;
use App\Core\Database\{Connection, QueryBuilder};

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();
$dotenv->required([
  'DB_DATABASE',
  'DB_USERNAME',
  'DB_PASSWORD',
  'DB_HOST'
])->notEmpty();

Application::bind('config', require __DIR__ . APP_CONFIG);

$pdo = Connection::make(Application::get('config')['database']);

Application::bind('database', new QueryBuilder($pdo));
