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
    $pasahitza= $_POST['Pasahitza1'];
  
  
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
<form class="login-form" action="erregistratu.php" method="POST" id="erregistroa">
  <p class="login-text" >
  <img src="../irudiak/mendia.png"  width="90" >
  </p>
  <input type="NAN" name="NAN" id="NAN" class="login-info" autofocus="true" required="true" placeholder="NAN (12345678A)" />
  <input type="Izena" name="Izena" id="Izena" class="login-info" autofocus="true" required="true" placeholder="Izen Abizenak" />
  <input type="Jaiotza" name="Jaiotza" id="Jaiotza" class="login-info" autofocus="true" required="true" placeholder="Jaiotze data (UUUU-HH-EE)" />
  <input type="Telefonoa" name="Telefonoa" id="Telefonoa" class="login-info" autofocus="true" required="true" placeholder="Telefonoa (123456789)" />
  <input type="Email" name="Email" id="Email" class="login-info" autofocus="true" required="true" placeholder="Helbide elektronikoa" />
  <input type="password"  name="Pasahitza1"  id="Pasahitza1" class="login-info" required="true" placeholder="Pasahitza" />
   <input type="password"  name="Pasahitza2" id="Pasahitza2" class="login-info" required="true" placeholder="Pasahitza errepikatu" />
   
  <input value="Erregistratu" class="erregistratu-submit" type="submit" />

  
<script src="../js/erregistratu.js"></script>

</form>
<a href="index.php" class="erregistro-itzuli">Itzuli</a>


<div class="underlay-photo"></div>
<div class="underlay-black"></div> 


  </body>
 </html>
 
