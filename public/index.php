<?php

// echo '<pre>';
// print_r ($_SERVER);
define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__));
define("APP",ROOT.DS.'app');

define("CONFIG",APP.DS.'config');
define("CONTROLLERS",APP.DS.'controllers');
define("VIEWS",APP.DS.'views'.DS);
define("MODELS",APP.DS.'models');

define("CORE",APP.DS.'core');

//config

define("SERVER","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","proflioproj");
define("DATABASE_TYPE","mysql");
define("DOMAIN_NAME","http://news.test/");

define('Domain_Path',DOMAIN_NAME.'/');
// echo PUBLIC1;die;


// require_once(CORE.DS."app.php");
// $app=new app();

require_once("../vendor/autoload.php");
$app=new MVC\core\app();

