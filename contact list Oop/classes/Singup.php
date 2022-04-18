<?php

class Singup extends Dbh {

 protected function setUser($username,$password){
 $stmt = $this->connect()->prepare('INSERT INTO accounts (username, password) VALUES (?, ?);');

 if(!$stmt->execute(array($username, $password))){
     $stmt = null;
     header("location: ../sing_up.php?error=stmtfailed");
     exit();
 }
}
 

  public function checkUser($username){

  //for securite we prepare stmt and query it before sending it to data base 
    $stmt = $this->connect()->prepare('SELECT  username FROM accounts WHERE username = ?');
       
    if(!$stmt->execute(array($username))){
     $stmt =null;
     header ("Location: ../sing-up?error=stmtfailed");
     exit();

    }

    $resultCheck;
  if ($stmt->rowCount() > 0) {
      $resultCheck = false;
      }
      else{
        $resultCheck = true;
      }

      return$resultCheck;


  }  
}   