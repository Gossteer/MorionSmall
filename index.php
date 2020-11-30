<?php

define("ROOT_DIR", __DIR__ .'/');

require_once "buildozer/autoload.php"; //автозагрузчик классов
require_once "buildozer/main.php"; //основной класс приложения

$application = new Application();    
$application->run();

$firstview = new ShowView();
$firstview->openPages('first');

// use Core\View\ShowView;

// $lol = new ShowView();

// $lol->openPages("first");

// echo('lol');
