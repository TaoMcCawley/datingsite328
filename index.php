<?php

require_once 'vendor/autoload.php';
require_once 'models/validate.php';
session_start();

$f3 = Base::instance();
$f3->set('DEBUG', 3);


$f3->route('GET /', function(){
    $template= new Template();
    echo $template->render('pages/home.html');
});

$f3->route('GET|POST /info', function($f3, $params){
    $errors = array();
    if(isset($_POST['submit'])){
        if(isset($_POST['inputFirstName'])) {
            if (validName($_POST['inputFirstName'])) {
                $_SESSION['firstName'] = $_POST['inputFirstName'];
                $f3->set("firstName", $_SESSION['firstName']);
            } else {
                $error = "First Name is invalid!";
                array_push($errors, $error);
            }
        }
        if(isset($_POST['inputLastName'])) {
            if (validName($_POST['inputLastName'])) {
                $_SESSION['lastName'] = $_POST['inputLastName'];
                $f3->set("lastName", $_SESSION['lastName']);
            } else {
                $error = "Last Name is invalid!";
                array_push($errors, $error);
            }
        }
        if(isset($_POST['phoneNumber'])) {
            if (validPhone($_POST['phoneNumber'])) {
                $_SESSION['phoneNumber'] = $_POST['phoneNumber'];
                $f3->set("phoneNumber", $_SESSION['phoneNumber']);
            } else {
                $error = "Phone Number is invalid!";
                array_push($errors, $error);
            }
        }
        if(isset($_POST['gender'])){
            $_SESSION['gender'] = $_POST['gender'];
            $f3->set("gender", $_SESSION['gender']);
        }
        else{
            $error = "gender is invalid!";
            array_push($errors, $error);
        }

        if(isset($_POST['age'])){
            if(validAge($_POST['age'])){
                $_SESSION['age'] = $_POST['age'];
                $f3->set('age', $_SESSION['age']);
            }
            else{
                $error = "age is invalid!";
                array_push($errors, $error);
            }
        }

        if(sizeof($errors) > 0){
            $f3->set("errors", $errors);
            $template = new Template();
            echo $template->render('pages/information.html');

        }else{
            $_POST["submit"] = null;
            $f3->reroute("/profile");
        }
    }else{
        $template= new Template();
        echo $template->render('pages/information.html');
    }
});

$f3->route("GET|POST /profile", function($f3){
    $errors = array();
    //Makes sure the submit button was pushed
    if(isset($_POST['submit'])){
        if(($_POST['emailAddress'])){
            $_SESSION['emailAddress'] = $_POST['emailAddress'];
            $f3->set('emailAddress', $_SESSION['emailAddress']);
        }
        else{
            $error = "email is invalid!";
            array_push($errors, $error);
        }
        //Makes sure the location state is set
        if(isset($_POST['locationState'])){
            $_SESSION['locationState'] = $_POST['locationState'];
            $f3->set('locationState', $_SESSION['locationState']);
        }else{
            $error = "pick a valid state!";
            array_push($errors, $error);
        }
        if(isset($_POST['biography'])){
            $_SESSION['biography'] = $_POST['biography'];
            $f3->set('biography', $_SESSION['biography']);
        }else{
            $error = "create a biography!";
            array_push($errors, $error);
        }

        if(isset($_POST['seekinggender'])){
            $_SESSION['seekinggender'] = $_POST['seekinggender'];
            $f3->set('seekinggender', $_SESSION['seekinggender']);
        }else{
            $error = "gender is not selected!";
            array_push($errors, $error);
        }

        //Checks to see if there are errors, and if none, move on the the next page. Otherwise, go back
        if(sizeof($errors) > 0){
            $f3->set("errors", $errors);
            $template = new Template();
            echo $template->render('pages/profile.html');

        }else{
            $_POST["submit"] = null;
            $f3->reroute("pages/interests.html");
        }
    }else{
        $template = new Template();
        echo $template->render('pages/profile.html');
    }
});




$f3->run();
