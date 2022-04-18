<?php


//selet



//ADD
if(isset($_POST["add"])){

    //Grabbing the data 
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$adresse = $_POST["adresse"];

 
include "../classes/Dbh.php";
include "../classes/contact.php";

 
$Add = new contact ($name,$email,$phone,$adresse);

  // running error handling and user sing up
 
  $Add->add();


   // going back to form page
   header("location: ../contacts.php");

}