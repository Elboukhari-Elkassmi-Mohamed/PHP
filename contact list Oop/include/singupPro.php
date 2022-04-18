<?php

if(isset($_POST["submit"])){


    //Grabbing the data 
$username = $_POST["username"];
$password = $_POST["password"];
 
include "../classes/Dbh.php";
include "../classes/Singup.php";
include "../classes/singupVal.php";


 
$singup = new singupVal ($username,$password);

  // running error handling and user sing up
 
$singup->singupUser();



   // going back to form page
   header("location: ../login.php");

}

?>