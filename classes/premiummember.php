<?php

/**
 * Created by PhpStorm.
 * User: Tao
 * Date: 3/2/2018
 * Time: 2:20 PM
 */
class PremiumMember extends Member
{
    private $indoorInterests;
    private $outdoorInterests;

    /**
     * PremiumMember constructor.
     * @param $indoorInterests
     * @param $outdoorInterests
     */
    public function __construct($fName, $lName, $age, $gender, $phone, $email, $state, $seeking, $bio, $indoorInterests, $outdoorInterests)
    {
        parent::__construct($fName, $lName, $age, $gender, $phone, $email, $state, $seeking, $bio);
        $this->indoorInterests = $indoorInterests;
        $this->outdoorInterests = $outdoorInterests;
    }

    /**
     * @return mixed
     */
    public function getIndoorInterests()
    {
        return $this->indoorInterests;
    }

    /**
     * @param mixed $indoorInterests
     */
    public function setIndoorInterests($indoorInterests)
    {
        $this->indoorInterests = $indoorInterests;
    }

    /**
     * @return mixed
     */
    public function getOutdoorInterests()
    {
        return $this->outdoorInterests;
    }

    /**
     * @param mixed $outdoorInterests
     */
    public function setOutdoorInterests($outdoorInterests)
    {
        $this->outdoorInterests = $outdoorInterests;
    }


}