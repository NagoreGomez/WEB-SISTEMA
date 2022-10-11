<?php 

  require "konexioa.php";
  
  session_start();
  
  $ibilbidea= $_GET['id'];
  $email= $_SESSION['Email'];
  $izena= $_SESSION['Izen abizenak'];
  
  
  
  
$query = mysqli_query($conn, "SELECT * FROM `ibilbideak` WHERE `Ibilbidearen izena` = '$ibilbidea' AND `Email`='$email'")
   or die (mysqli_error($conn));

while ($row = mysqli_fetch_array($query)) {   
  $zailtasuna= $row['Zailtasuna'];
  $distantzia= $row['Distantzia (m)'];
  $desnibela= $row['Desnibela (m)'];
  $link= $row['Link-a'];
   
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
      
    </span>
  </p>
  <p style="font-size: 20px;margin: 0px 0; color:white">Ibilbidearen izena:</p>
   <input name="id" class="login-info" id="id" <?php echo" value='{$ibilbidea}'";?>/>
   
  <p style="font-size: 20px;margin: 0px 0; color:white">Zailtasuna:</p>
  <input name="id" class="login-info" id="id" <?php echo" value='{$zailtasuna}'";?>/>
  
  <p style="font-size: 20px;margin: 0px 0; color:white">Distantzia (m):</p>
 <input name="id" class="login-info" id="id" <?php echo" value='{$distantzia}'";?>/>
 
  <p style="font-size: 20px;margin: 0px 0; color:white">Desnibela (m):</p>
  <input name="id" class="login-info" id="id" <?php echo" value='{$desnibela}'";?>/>
  
  <p style="font-size: 20px;margin: 0px 0; color:white">Link-a:</p>
  <input name="id" class="login-info" id="id" <?php echo" value='{$link}'";?>/>

  
</form>
<a href="index.php" class="erregistro-itzuli">Itzuli</a>


<div class="underlay-photo"></div>
<div class="underlay-black"></div> 


  </body>
 </html>
 
