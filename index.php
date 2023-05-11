<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once ('vendor/autoload.php');

// Create an F3 (Fat Free Framework) object
$f3 = Base::instance();

$f3->route('GET /', function() {

// Define View page
    $view = new Template();
    echo $view->render('Views/pets.html');

});

// Run Fat Free Framework
$f3->run();