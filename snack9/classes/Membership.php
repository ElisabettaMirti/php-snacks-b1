<?php

class Membership {
    private $membership_period;
    private $discount;

    public function __construct ($period, $discount){
        $this->membership_period = $period;
        $this->discount = $discount;
    }

    /**
     * function that shows this membership discount
     *
     * @return void
     */
    public function GetDiscount(){
        return $this->discount;
    }

    /**
     * function that shows the period of time this user has membership
     *
     * @return void
     */
    public function GetPeriod(){
        return $this->membership_period;
    }
}