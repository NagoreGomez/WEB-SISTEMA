<?php 

  require "konexioa.php";
  
  session_start();
  
  header_remove('X-Powered-By');
  
  $email= $_SESSION['Email'];
 
  
  $izena=$_POST['Izena'];
  $nan= $_POST['NAN'];
  $telefonoa= $_POST['Telefonoa'];
  $jaiotza= $_POST['Jaiotza'];
  $pasahitza= $_POST['Pasahitza'];
   
  $sql="UPDATE `erabiltzaileak` SET `NAN` = '$nan',`Izen abizenak`='$izena', `Telefonoa`='$telefonoa', `Jaiotze data`='$jaiotza',`Pasahitza`='$pasahitza' WHERE `Email` = '$email' ";

  $query = mysqli_query($conn, $sql);

  if($query){
  	header("Location: http://localhost:81/erabiltzailearenMenua.php");   
    	exit;
 } 
 
?>
 
 


 
