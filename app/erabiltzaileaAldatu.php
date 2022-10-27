<?php 

  require "konexioa.php";
  
  session_start();
  
  
  $email= $_SESSION['Email'];
  
  
  
$query = mysqli_query($conn, "SELECT * FROM `erabiltzaileak` WHERE  `Email`='$email'");
$row = mysqli_fetch_array($query);
 

 
 ?>

<!DOCTYPE html>
    
<html lang="es">
 <link
      rel="stylesheet"
       type=text/css
      href="./erabiltzaileaAldatu.css"
    />
 
 
 <body>
<form class="login-form" action="erabiltzaileAldaketaEgin.php" method="POST" id="erabiltzaileAldatu">
  <p class="login-text">
    <img src="../irudiak/mendia.png"  width="90" >  
  <br/>
  </p>
  <p style="font-size: 20px;margin: 0px 0; color:white">Helbide elektronikoa:</p>
   <input type= "Email" name="Email" class="izena"<?php echo" value='{$email}'";?> readonly/>
   
  <p style="font-size: 20px;margin: 0px 0; color:white">Izen abizenak:</p>
  <input type="Izena" name="Izena" class="login-info" id="Izena" <?php echo" value='{$row['Izen abizenak']}'";?>/>
  
   <p style="font-size: 20px;margin: 0px 0; color:white">NAN:</p>
 <input type= "NAN" name="NAN" class="login-info" id="NAN" <?php echo" value='{$row['NAN']}''";?>/>
  
  <p style="font-size: 20px;margin: 0px 0; color:white">Telefonoa:</p>
 <input type= "Telefonoa" name="Telefonoa" class="login-info" id="Telefonoa" <?php echo" value='{$row['Telefonoa']}''";?>/>
 
  <p style="font-size: 20px;margin: 0px 0; color:white">Jaiotze data:</p>
  <input type ="Jaiotza" name="Jaiotza" class="login-info" id="Jaiotza" <?php echo" value='{$row['Jaiotze data']}'";?>/>
  
  <p style="font-size: 20px;margin: 0px 0; color:white">Pasahitza:</p>
  <input type= "Pasahitza"name="Pasahitza" class="login-info" id="Pasahitza" <?php echo" value='{$row['Pasahitza']}''";?>/>
  
  <input  value="Aldatu" class="ezabatu-gehitu-submit" type="submit"/>
   
  
  <script src="../js/erabiltzaileAldatu.js"></script>

  
</form>
<a href="erabiltzailearenMenua.php" class="erregistro-itzuli">Itzuli</a>


<div class="underlay-photo"></div>
<div class="underlay-black"></div> 


  </body>
 </html>
 
