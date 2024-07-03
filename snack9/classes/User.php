<?php

class User {
    private $username;
    private $password;

    public function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;
    }


    /**
     * fucntion that returns this user username
     *
     * @return void
     */
    public function GetUsername(){
        return $this->username;
    }

    /**
     * function that let you edit this user username
     *
     * @param String $username
     * @return $username
     */
    public function SetUsername($username){
        $this->username = $username;
    }
}