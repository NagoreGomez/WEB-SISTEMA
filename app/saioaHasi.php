<?php
require "index.php"

session_sart();

  $izena = $_POST['Izena'];
  $pasahitza = $_POST['Pasahitza'];
  
  $sql= "SELECT * FROM 'usuarios' WHERE 'Izena'='$izena' and 'Pasahitza'='$pasahitza'";
  $query = mysqli_qery($conn,$sql);
  $row = mysqli_fetch_array($query);

    if($row['Izena']!=null){ 
      $_SESSION['Izena'] = $izena;     
      header("Location: http://localhost:81/index.php");
      exit;      
   
   }
?>
