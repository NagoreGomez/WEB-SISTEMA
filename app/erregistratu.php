<?php
$host = $_SERVER['HTTP_HOST'];
require "konexioa.php";
  

session_start();

if($conn){
    $nan= $_POST['NAN'];
    $izena= $_POST['Izena'];
    $jaio= $_POST['Jaiotza'];
    $email= $_POST['Email'];
    $telefonoa= $_POST['Telefonoa'];
    $pasahitza= $_POST['Pasahitza'];
  
  
    $sql="INSERT INTO `erabiltzaileak` (`NAN`, `Izen abizenak`,`Telefonoa`,`Jaiotze data`,`Email`,`Pasahitza` ) VALUES ('$nan', '$izena', '$telefonoa','$jaio', '$email', '$pasahitza')";
    $query = mysqli_query($conn, $sql);
     
    
     if($query){
        header("Location: http://localhost:81/index.php");
        exit;
      }

}



?>




<!DOCTYPE html>
<html lang="es">
 <link
      rel="stylesheet"
       type=text/css
      href="./erregistratu.css"
    />
 
 
 <body>
<form class="login-form" action="erregistratu.php" method="POST" >
  <p class="login-text">
    <span class="fa-stack fa-lg">
       <i class="fa fa-user fa-solid-2x"></i>
      
    </span>
  </p>
  <input type="NAN" name="NAN" class="login-info" autofocus="true" required="true" placeholder="NAN" />
  <input type="Izena" name="Izena" class="login-info" autofocus="true" required="true" placeholder="Izen Abizenak" />
  <input type="Jaiotza" name="Jaiotza" class="login-info" autofocus="true" required="true" placeholder="Jaiotze data (YYYY-MM-DD)" />
  <input type="Telefonoa" name="Telefonoa" class="login-info" autofocus="true" required="true" placeholder="Telefonoa" />
  <input type="Email" name="Email" class="login-info" autofocus="true" required="true" placeholder="Helbide elektronikoa" />
  <input type="Pasahitza"  name="Pasahitza"  class="login-info" required="true" placeholder="Pasahitza" />
  <input type="submit" name="Erregistratu" value="Erregistratu" class="erregistratu-submit" />
  
</form>
<a href="index.php" class="erregistro-itzuli">Itzuli</a>


<div class="underlay-photo"></div>
<div class="underlay-black"></div> 


  </body>
 </html>
 
