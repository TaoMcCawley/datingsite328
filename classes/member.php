<?php

/**
 * Created by PhpStorm.
 * User: Tao
 * Date: 3/2/2018
 * Time: 9:51 AM
 */
class Member
{
    private $fName;
    private $lName;
    private $age;
    private $gender;
    private $phone;
    private $email;
    private $state;
    private $seeking;
    private $bio;

    /**
     * Member constructor.
     * @param $fName
     * @param $lName
     * @param $age
     * @param $gender
     * @param $phone
     * @param $email
     * @param $state
     * @param $seeking
     * @param $bio
     */
    public function __construct($fName, $lName, $age, $gender, $phone, $email, $state, $seeking, $bio)
    {
        $this->fName = $fName;
        $this->lName = $lName;
        $this->age = $age;
        $this->gender = $gender;
        $this->phone = $phone;
        $this->email = $email;
        $this->state = $state;
        $this->seeking = $seeking;
        $this->bio = $bio;
    }



    /**
     * @return mixed
     */
    public function getFName()
    {
        return $this->fName;
    }

    /**
     * @param mixed $fName
     */
    public function setFName($fName)
    {
        $this->fName = $fName;
    }

    /**
     * @return mixed
     */
    public function getLName()
    {
        return $this->lName;
    }

    /**
     * @param mixed $lName
     */
    public function setLName($lName)
    {
        $this->lName = $lName;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getSeeking()
    {
        return $this->seeking;
    }

    /**
     * @param mixed $seeking
     */
    public function setSeeking($seeking)
    {
        $this->seeking = $seeking;
    }

    /**
     * @return mixed
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * @param mixed $bio
     */
    public function setBio($bio)
    {
        $this->bio = $bio;
    }



}