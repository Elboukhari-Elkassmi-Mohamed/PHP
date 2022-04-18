<?php

if(isset($_POST["submit"])){

    //Grabbing the data 
$username = $_POST["username"];
$password = $_POST["password"];

 
include "../classes/Dbh.php";
include "../classes/Singin.php";
include "../classes/singinVal.php";


 
$singin = new singinVal ($username,$password);

  // running error handling and user sing up
 
$singin->singinUser();


   // going back to form page
   header("location: ../profil.php");

}