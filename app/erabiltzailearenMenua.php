<?php

require "konexioa.php";

session_start();
    $nan= $_POST['NAN'];
    $izena= $_POST['Izen Abizenak']
    $jaio= $_POST['Jaiotza'];
    $email= $_POST['Email'];
    $telefonoa= $_POST['Telefonoa'];
    $pasahitza= $_POST['Pasahitza'];
    
    $sql ="INSERT INTO `erabiltzaileak` VALUES ('$nan', '$izena', '$jaio', '$email', '$telefonoa', '$pasahitza')
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);
 



?>

<!DOCTYPE html>
<html lang="es">
 <link
      rel="stylesheet"
       type=text/css
      href="./erabiltzailearenMenua.css"
    />
 
 
 <body>
<form action="erregistro.php" method="POST" >
<form class="login-form">
  <p class="login-text">
    <span class="fa-stack fa-lg">
       <i class="fa fa-user fa-solid-2x"></i>
      
    </span>
  </p>
  <input type="NAN" name="NAN" class="login-info" autofocus="true" required="true" placeholder="NAN" />
  <input type="Izen Abizenak" name="Izen Abizenak" class="login-info" autofocus="true" required="true" placeholder="Izen Abizenak" />
  <input type="Jaiotza" name="Jaiotza" class="login-info" autofocus="true" required="true" placeholder="Jaiotze data (MM/DD/YYYY)" />
  <input type="Telefonoa" name="Telefonoa" class="login-info" autofocus="true" required="true" placeholder="Telefonoa" />
  <input type="Email" name="Email" class="login-info" autofocus="true" required="true" placeholder="Helbide elektronikoa" />
  <input type="Pasahitza"  name="Pasahitza"  class="login-info" required="true" placeholder="Pasahitza" />
  <input type="submit" name="Erregistratu" value="Erregistratu" class="erregistratu-submit" />
  
</form></form>
<a href="index.php" class="erregistro-itzuli">Itzuli</a>


<div class="underlay-photo"></div>
<div class="underlay-black"></div> 


  </body>
 </html>
 
