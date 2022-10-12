<?php
$host = $_SERVER['HTTP_HOST'];
require "konexioa.php";
  

session_start();

$email= $_SESSION['Email'];



if($conn){
    $izena= $_POST['Izena'];
    $zailtasuna= $_POST['Zailtasuna'];
    $distantzia= $_POST['Distantzia'];
    $desnibela= $_POST['Desnibela'];
    $link= $_POST['Link'];
  
  
    $sql="INSERT INTO `ibilbideak` (`Email`,`Ibilbidearen izena`, `Zailtasuna`,`Distantzia (m)`,`Desnibela (m)`,`Link-a` ) VALUES ('$email', '$izena', '$zailtasuna','$distantzia', '$desnibela', '$link')";

    $query = mysqli_query($conn, $sql);
     
     if($query){
        header("Location: http://localhost:81/erabiltzailearenMenua.php");
        exit;
      }

}

?>

<!DOCTYPE html>
<html lang="es">
 <link
      rel="stylesheet"
       type=text/css
      href="./ibilbideaGehitu.css"
    />
 
 
 <body>
<form class="login-form" action="ibilbideaGehitu.php" method="POST" >
  <p class="login-text" >
  <img src="../irudiak/mendia.png"  width="90" >
  </p>
  <input type="Izena" name="Izena" class="login-info" autofocus="true" required="true" placeholder="Ibilbidearen izena" />
  <input type="Zailtasuna" name="Zailtasuna" class="login-info" autofocus="true" required="true" placeholder="Erraza/Ertaina/Zaila" />
  <input type="Distantzia" name="Distantzia" class="login-info" autofocus="true" required="true" placeholder="Distantzia (metrotan)" />
  <input type="Desnibela" name="Desnibela" class="login-info" autofocus="true" required="true" placeholder="Desnibela (metrotan)" />
  <input type="Link" name="Link" class="login-info" autofocus="true" required="true" placeholder="Link-a" />

  <input type="submit" name="Gehitu" value="Ibilbidea gehitu" class="erregistratu-submit" />
  
</form>
<a href="erabiltzailearenMenua.php" class="erregistro-itzuli">Itzuli</a>


<div class="underlay-photo"></div>
<div class="underlay-black"></div> 


  </body>
 </html>
 
