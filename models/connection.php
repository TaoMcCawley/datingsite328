<?php
/**
 *
 * CREATE TABLE members(
        member_id INT NOT NULL AUTO_INCREMENT,
        fName VARCHAR(20),
        lName VARCHAR(20),
        age INT,
        gender VARCHAR(8),
        phone INT(10),
        email VARCHAR(30),
        state VARCHAR(20),
        seeking VARCHAR(8),
        bio VARCHAR(500),
        premium TINYINT,
        image VARCHAR(40),
        interests VARCHAR(500),
        PRIMARY KEY (member_id)
);
 */
    require_once '../../../../config.php';
    include '../classes/member.php';
    include '../classes/premiummember.php';

    function getConnection(){
        try{
            //Instantiate a new database object
            $dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            echo 'connected to Database!';
            return $dbh;


        }catch (PDOException $e){
            echo $e->getMessage();
        }
    }


    function addUser($user){
        $dbh = getConnection();
        $sql = "INSERT INTO members(fName, lName, age, gender, phone, email, state, seeking, bio, premium, image, interests)
                VALUES(:fName, :lName, :age, :gender, :phone, :email, :state, :seeking, :bio, :premium, :image, :interests)";

        $statement = $dbh->prepare($sql);

        $statement->bindParam(':fName', $user->getFName(), PDO::PARAM_STR);
        $statement->bindParam(':lName', $user->getLName(), PDO::PARAM_STR);
        $statement->bindParam(':age', $user->getAge(), PDO::PARAM_INT);
        $statement->bindParam(':gender', $user->getGender(), PDO::PARAM_STR);
        $statement->bindParam(':phone', $user->getPhone(), PDO::PARAM_INT);
        $statement->bindParam(':email', $user->getEmail(), PDO::PARAM_STR);
        $statement->bindParam(':state', $user->getState(), PDO::PARAM_STR);
        $statement->bindParam(':seeking', $user->getSeeking(), PDO::PARAM_STR);
        $statement->bindParam(':bio', $user->getBio(), PDO::PARAM_STR);

        $isPremium = method_exists($user, 'getIndoorInterests');

        //It's important to send premium as a number, so we will convert it to one here.

        $imagePath = null;
        $totalInterests = '';
        if($isPremium){
            $isPremium = 1;
            $indoorInterests = $user->getIndoorInterests();
            $outdoorInterests = $user->getOutdoorInterests();

            $totalInterests = array_merge($indoorInterests, $outdoorInterests);

            $statement->bindParam(':premium', $isPremium, PDO::PARAM_INT);
            $statement->bindParam(':image', $imagePath, PDO::PARAM_STR);
            $statement->bindParam(':interests', implode($totalInterests), PDO::PARAM_STR);
        }else{
            $isPremium = 0;
            $statement->bindParam(':premium', $isPremium, PDO::PARAM_INT);
            $statement->bindParam(':image', $imagePath, PDO::PARAM_STR);
            $statement->bindParam(':interests', $totalInterests, PDO::PARAM_STR);
        }

        $statement->execute();
    }

    function getUsers(){

    }









