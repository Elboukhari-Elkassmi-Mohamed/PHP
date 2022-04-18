<?php

class singin extends Dbh {

 protected function getUser($username, $password){

    $stmt = $this->connect()->prepare('SELECT * FROM accounts WHERE username = ? AND password = ? ;'); 

    if(!$stmt->execute(array($username, $password))){
        $stmt = null;
        header("location: ../login.php?error=stmtfailed4");
        exit();
    } 
    if($stmt->rowCount()== 0){
        $stmt = null;
        header("location: ../login.php?error=stmtfailed5");
        exit();
    }

    $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
    session_start();

    $_SESSION["id"] = $user[0]["id"];
    $_SESSION["username"] = $user[0]["username"];
    $_SESSION["date"] = $user[0]["date"];
    date_default_timezone_set('africa/casablanca');
    $_SESSION["last_login"]= date ('Y/m/d H:i:s');

}

}
 


