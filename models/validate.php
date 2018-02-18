<?php

define('PHONE_NUM_DIGITS', 10);
define('VALID_OUTDOOR_OPTIONS', array("hiking", "biking", "swimming", "collecting", "walking", "climbing"));
define('VALID_INDOOR_OPTIONS', array("tv", "movies", "cooking", "boardgames", "puzzles", "reading","playingcards","videogames"));

/**
 * Checks to see if the name is alphabetical
 *
 * @param $name The name we are checking
 */
function validName($name){
    return ctype_alpha($name);
}

/**
 * Checks to see if the age is valid
 *
 * @param $age The age we are checking
 */
function validAge($age){
    if(ctype_digit($age)){
        $numAge = intval($age);
        if($numAge > 18){
            return true;
        }
    }
    return false;

}

/**
 * Checks to see if our phone number is valid
 * all numbers, 10 digits including area code
 *
 * @param $phone the phone number we are checking
 */
function validPhone($phone){
    if(ctype_digit($phone)){
        if(strlen($phone) == PHONE_NUM_DIGITS){
            return true;
        }
    }
    return false;
}

/**
 * Checks to see if the interests are valid
 *
 * @param $outdoorInterests The array of outdoor interets
 */
function validOutdoor($outdoorInterests){
    foreach($outdoorInterests as $value){
        if(!in_array($value, VALID_OUTDOOR_OPTIONS)){
            return false;
        }
    }
    return true;
}


/**
 * Checks to if the indoor interests are valid
 *
 * @param $indoorInterests the array of indoor interests
 */
function validIndoor($indoorInterests){
    foreach($indoorInterests as $value){
        if(!in_array($value, VALID_INDOOR_OPTIONS)){
            return false;
        }
    }
    return true;
}