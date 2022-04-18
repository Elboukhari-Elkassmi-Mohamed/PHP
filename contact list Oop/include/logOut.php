<?php 

session_start();

session_unset();

session_destroy();



   // going back to form page
   header("location: ../index.php");



