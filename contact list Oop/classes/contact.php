<?php 
session_start();
class contact extends Dbh {

private $name;
private $email;
private $phone;
private $adresse;



public function contruct($name,$email,$phone,$adresse) {


    $this->name = $name;
    $this->email = $email;
    $this->phone = $phone;
    $this->adresse = $adresse;


}


public function select(){

    try{
    $stmt = $this->connect()->prepare('SELECT * FROM contact WHERE fk_User = ?');

    if(!$stmt->execute(array($_SESSION["id"]))){
        $stmt = null;
        header("location: ../contacts.php?error=stmtfailed1");
        exit();
    }

     $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $user;

    }

    catch(Exception $e){
       return $e->getMessage();

    }
    
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

public function delet($contact_id){

        $stmt = $this->connect()->prepare('DELETE FROM contact WHERE contact_id = ?');
        $stmt->execute(array($contact_id));

        header("location: ../contacts.php?reussi");


    }


    function edit($contact_id){

        $stmt = $this->connect()->prepare('SELECT * FROM contact WHERE contact_id = ?');
        if(!$stmt->execute(array($contact_id))){
            $stmt = null;
            header("location: ../contacts.php?error=stmtEditFailed");
            exit();
        }
    
         $userEdit = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $userEdit;
    
        }


        public function update(){

            
                $stmt = $this->connect()->prepare('UPDATE contact SET name=?, email=?, phone=?, adresse=? WHERE contact_id = ?');
    
                 $stmt->execute(array($this->name, $this->email, $this->phone, $this->adresse ,$_SESSION["up_id"]));
                 header("location: ../contacts.php?reussiUPDATE");
    
    
                 }
    
    }
    
        


    












         