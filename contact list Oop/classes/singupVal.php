<?php

class singupVal extends  Singup {

private $username;
private $password;

public function __construct ($username, $password){
    $this->username = $username;
    $this->password = $password;

}

public function singupUser(){
    
    if(!$this->userNameChecker()){

        header("location: ../sign_up.php?error=existUser");

        exit();

    }
    $this->setUser($this->username,$this->password);
}


    public function userNameChecker() {
     
        $result;
   
        if(!$this->checkUser($this->username)){
            
            $result = false;
    
        }
        else {
            $result = true; 
        }
        return $result;

    }
}