<?php

class PremiumUser extends User {
    private $level;
    private $membership;

    public function __construct ($username, $password, $level, Membership $membership){
        parent::__construct($username, $password);
        $this->level = $level;
        $this->membership = $membership;
    }

    /**
     * fucntion that returns this user level of membership
     *
     * @return void
     */
    public function GetLevel(){
        return $this->level;
    }
}