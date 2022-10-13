<?php 

  require "konexioa.php";
  
  session_start();
  
  $email= $_SESSION['Email'];
  $izena= $_SESSION['Izen abizenak'];
 
  
  $ibilbidea=$_POST['Izena'];
  $zailtasuna= $_POST['Zailtasuna'];
  $distantzia= $_POST['Distantzia'];
  $desnibela= $_POST['Desnibela'];
  $link= $_POST['Link-a'];
   
$sql="UPDATE `ibilbideak` SET `Ibilbidearen izena`='$ibilbidea',`Zailtasuna` = '$zailtasuna', `Distantzia (m)`='$distantzia', `Desnibela (m)`='$desnibela',`Link-a`='$link' WHERE `Ibilbidearen izena`='$ibilbidea' AND `Email` = '$email' ";


$query = mysqli_query($conn, $sql);

if($query){
    header("Location: http://localhost:81/erabiltzailearenMenua.php");   
    exit;
}
 
 ?>


 
