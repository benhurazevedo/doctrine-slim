<?php
use \Slim\App;

require_once "config.php";

require_once "bootstrap.php";

$app = new App($AppConfig);

require_once "dependencies.php";

require_once "routes.php";


$app->run();
