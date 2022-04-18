<?php

class Dbh {
    protected function connect(){  
       
     try{
    $username = "root";
    $password = "";
    $db = new PDO('mysql:host=localhost;dbname=contact_list', $username, $password);
    return $db;
      }
// $e default name 
catch (PDOException $e){

 var_dump('Couldn\'t Establish A Database Connection. Due to the following reason: ' . $e->getMessage());

         }
    }
}