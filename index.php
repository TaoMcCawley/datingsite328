<?php

require_once 'vendor/autoload.php';

$f3 = Base::instance();

$f3->route('GET /', function(){
    $view = new View();
    echo $view->render('views/home.html');
});

$f3->run();

?>