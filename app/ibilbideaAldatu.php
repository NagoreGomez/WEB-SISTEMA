<?php 

  require "konexioa.php";
  
  session_start();
  
  $ibilbidea= $_GET['id'];
  $email= $_SESSION['Email'];
  $izena= $_SESSION['Izen abizenak'];
  
  
  
$query = mysqli_query($conn, "SELECT * FROM `ibilbideak` WHERE `Ibilbidearen izena` = '$ibilbidea' AND `Email`='$email'");
$row = mysqli_fetch_array($query);
 

 
 ?>

<!DOCTYPE html>
    
<html lang="es">
 <link
      rel="stylesheet"
       type=text/css
      href="./ibilbideaAldatu.css"
    />
 
 
 <body>
<form class="login-form" action="ibilbideAldaketaEgin.php" method="POST" >
  <p class="login-text">
    <img src="../irudiak/mendia.png"  width="90" >  
  <br/>
  </p>
  <p style="font-size: 20px;margin: 0px 0; color:white">Ibilbidearen izena:</p>
   <input type= "Izena" name="Izena" class="izena" id="id"<?php echo" value='{$ibilbidea}'";?> readonly/>
   
  <p style="font-size: 20px;margin: 0px 0; color:white">Zailtasuna:</p>
  <input type="Zailtasuna" name="Zailtasuna" class="login-info" id="id" <?php echo" value='{$row['Zailtasuna']}'";?>/>
  
  <p style="font-size: 20px;margin: 0px 0; color:white">Distantzia (m):</p>
 <input type= "Distantzia" name="Distantzia" class="login-info" id="id" <?php echo" value='{$row['Distantzia (m)']}''";?>/>
 
  <p style="font-size: 20px;margin: 0px 0; color:white">Desnibela (m):</p>
  <input type ="Desnibela" name="Desnibela" class="login-info" id="id" <?php echo" value='{$row['Desnibela (m)']}'";?>/>
  
  <p style="font-size: 20px;margin: 0px 0; color:white">Link-a:</p>
  <input type= "Link-a"name="Link-a" class="login-info" id="id" <?php echo" value='{$row['Link-a']}''";?>/>
  
  <input type="submit" name="Aldatu" value="Aldatu" class="ezabatu-gehitu-submit" />

  
</form>
<a href="erabiltzailearenMenua.php" class="erregistro-itzuli">Itzuli</a>


<div class="underlay-photo"></div>
<div class="underlay-black"></div> 


  </body>
 </html>
 
