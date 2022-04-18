<?php

class singinVal extends singin {

private $username;
private $password;

public function __construct ($username, $password){
    $this->username = $username;
    $this->password = $password;

}


public function singinUser(){
    
    if($this->emptyInput() == false) {

        header("location: ../login.php?error=emptyInput");

        exit();

    }

    $this->getUser($this->username, $this->password); 

}

       private function emptyInput() {

        $result;
   
        if(empty($this->username) || empty($this->password)){
            
            $result = false;
    
        }
        else {
            $result = true; 
        }
        return $result;

    }
}