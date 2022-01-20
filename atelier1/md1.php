<?php

// Exercice 2 :

// 1: php fichier.php in terminal

//2
echo 'hello world' ; 
echo "<br><br>";
// EX 3:
//1
$monNom = 'Elboukhari';
$monPrenom = 'Mohamed';
$monAge ='26';
//2
echo " $monNom $monPrenom $monAge";
echo "<br><br>";
//3
echo '$monNom $monPrenom $monAge';
echo "<br><br>";

//4 double Quotes reads the value of the variable 
// singl Q reads the writing as it is

//5 
$string = <<<Name
$monNom <br>
$monPrenom <br>
$monAge <br><br>
    
Name;

echo "$string";

//6
$string = <<<'Namenowdoc'
$monNom <br>
$monPrenom <br>
$monAge <br>


Namenowdoc;
echo "$string";
echo "<br>";


// 7 heredoc allow multi line strings containing variables 
// to be easily assigned to variables or echoed 
// Nowdoc works similarly to heredoc but treats the string like a single quoted string


// Ex 4
// bool to int
$x = (int) true;

$y = (int) false;

var_dump ($x); echo "<br>";
var_dump ($y);

// char to string
echo "<br>";
$z = (string) 123;
var_dump ($z);

?>

