<?php


//ADD
if(isset($_POST["add"])){

    //Grabbing the data 
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$adresse = $_POST["adresse"];

 
include "../classes/Dbh.php";
include "../classes/contact.php";

 
$Add = new contact ();
$Add ->contruct($name,$email,$phone,$adresse); 
$Add->add();



   // going back to form page
   header("location: ../contacts.php");
}


   //delet
   if(isset($_GET["delet"])){

     $contact_id = $_GET["delet"];
     
     include "../classes/Dbh.php";
     include "../classes/contact.php";

 
$delet = new contact ();
$delet ->delet($contact_id );

  }

  //update

if(isset($_POST["update"])){

   //Grabbing the data 
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$adresse = $_POST["adresse"];


include "../classes/Dbh.php";
include "../classes/contact.php";


$update = new contact ();
$update ->contruct($name,$email,$phone,$adresse); 
$update->update();



  }


  


