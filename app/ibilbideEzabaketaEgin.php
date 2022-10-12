<?php 

  require "konexioa.php";
  
  session_start();
  
  $email= $_SESSION['Email'];
  $izena= $_SESSION['Izen abizenak'];
  $ibilbidea= $_GET['id'];


  
$sql="DELETE FROM `ibilbideak` WHERE `Ibilbidearen izena`='$ibilbidea' AND `Email` = '$email' ";


$query = mysqli_query($conn, $sql);

if($query){
    header("Location: http://localhost:81/erabiltzailearenMenua.php");   
    exit;
}
 
 ?>


 
