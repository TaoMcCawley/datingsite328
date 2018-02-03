<?php

require_once 'vendor/autoload.php';
session_start();

$f3 = Base::instance();
$f3->set('DEBUG', 3);

$f3->route('GET /', function(){
    $template= new Template();
    echo $template->render('pages/home.php');
});



$f3->run();
