<?php

session_start(); 

$numero1=$_POST['num1'];
$numero2=$_POST['num2'];

$suma=$numero1+$numero2; 

$_SESSION['resultado']=$suma; 

header("Location: index.php"); //Esto me lleva tras el procesamiento de datos al index.php

?>