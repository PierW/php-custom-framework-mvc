<?php

return [

  'database' => [

    'name' => getenv('DB_DATABASE'),
    'username' => getenv('DB_USERNAME'),
    'password' => getenv('DB_PASSWORD'),
    'host' => getenv('DB_HOST'),
    'options' =>[
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]

  ]

];
