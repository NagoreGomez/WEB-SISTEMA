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
  



  $stmt = $conn->prepare("UPDATE ibilbideak SET Ibilbidearen_izena = ?, Zailtasuna = ?, Distantzia_m = ?, Desnibela_m = ?, Link = ? WHERE Id= ?"); 
  $stmt->bind_param("ssiisi",$ibilbidea,$zailtasuna, $distantzia,$desnibela,$link,$id);
  
  if($stmt->execute()){
  	header("Location: http://localhost:81/erabiltzailearenMenua.php"); 
  	
  }
 
 ?>


 
