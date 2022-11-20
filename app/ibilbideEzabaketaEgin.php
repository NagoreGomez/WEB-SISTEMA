<?php 

  require "konexioa.php";
  
  session_start();
  header_remove('X-Powered-By');
  
  $email= $_SESSION['Email'];
  $izena= $_SESSION['Izen abizenak'];
  $id= $_GET['Id'];


  $stmt = $conn->prepare("DELETE FROM ibilbideak WHERE Id=?"); 
  $stmt->bind_param("i", $id);
  
  if($stmt->execute()){
  	header("Location: http://localhost:81/erabiltzailearenMenua.php");   
        exit;
  }
 
 ?>
 


 
