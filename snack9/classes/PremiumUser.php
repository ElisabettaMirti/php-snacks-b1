<?php

class PremiumUser extends User {
    private $level;
    private $membership;

    public function __construct ($level, Membership $membership){
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