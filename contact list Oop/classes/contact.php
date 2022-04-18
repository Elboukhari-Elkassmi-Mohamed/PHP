<?php 
session_start();
class contact extends Dbh {

private $name;
private $email;
private $phone;
private $adresse;




public function __construct($name,$email,$phone,$adresse){

    $this->name = $name;
    $this->email = $email;
    $this->phone = $phone;
    $this->adresse = $adresse;

}


public function select(){


    $stmt = $this->connect()->prepare('SELECT * FROM contact WHERE $_SESSION["id"] = fk_User');
    $stmt = $stmt->execute(array($_SESSION["id"]));


    




}

public function add(){

        if(empty($this->name) ||empty($this->email)||empty($this->phone)||empty($this->adresse)){

            header("location: ../contact.php?error=stmtfailedEmtyInput");
            exit();

        }
        

        
        
        else {
            $stmt = $this->connect()->prepare('INSERT INTO contact (name, email, phone, adresse , fk_User) VALUES (?, ?, ?, ?, ?)');

             $stmt->execute(array($this->name, $this->email, $this->phone, $this->adresse, $_SESSION["id"]));
             header("location: ../contact.php?reussi");


                      }

}







                                            







                       }