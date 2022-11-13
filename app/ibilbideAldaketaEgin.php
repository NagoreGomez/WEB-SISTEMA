<?php 

  require "konexioa.php";
  
  session_start();
  
  header_remove('X-Powered-By');
  
  $email= $_SESSION['Email'];
  $izena= $_SESSION['Izen abizenak'];
 
  
  $ibilbidea=$_POST['Izena'];
  $zailtasuna= $_POST['Zailtasuna'];
  $distantzia= $_POST['Distantzia'];
  $desnibela= $_POST['Desnibela'];
  $link= $_POST['Link-a'];
  
  $id= $_SESSION['id'];
  
 
   
$sql="UPDATE `ibilbideak` SET `Ibilbidearen izena`='$ibilbidea',`Zailtasuna` = '$zailtasuna', `Distantzia (m)`='$distantzia', `Desnibela (m)`='$desnibela',`Link-a`='$link' WHERE `Id`='$id' ";


$query = mysqli_query($conn, $sql);

if($query){
    header("Location: http://localhost:81/erabiltzailearenMenua.php");   
    exit;
}
 
 ?>


 
