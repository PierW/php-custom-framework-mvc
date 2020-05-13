<?php
// NOTE: Entry-Point dell'App

define('APP_CONFIG', '/../config.php');

require '../vendor/autoload.php';

require_once '../functions.php';

require '../core/bootstrap.php';

use App\Core\{Router, Request};


$router = Router::load('../app/routes.php');

$router -> direct(Request::uri(), Request::method());
