<?php 

  require "konexioa.php";
  
  session_start();
  
  $email= $_SESSION['Email'];
  $izena= $_SESSION['Izen abizenak'];
  $id= $_GET['Id'];


  
$sql="DELETE FROM `ibilbideak` WHERE `Id`='$id'";

$query = mysqli_query($conn, $sql);

if($query){
    
    header("Location: http://localhost:81/erabiltzailearenMenua.php");   
    exit;
}
 
 ?>
 


 
