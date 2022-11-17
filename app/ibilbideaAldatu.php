<?php 

  require "konexioa.php";
  
  session_start();
  
  $id= $_GET['id'];
  $email= $_SESSION['Email'];
  $izena= $_SESSION['Izen abizenak'];
  $_SESSION['id'] = $id; 
  $id= $_SESSION['id'];
  
  header( 'X-Content-Type-Options: nosniff' );
  header( 'X-Frame-Options: SAMEORIGIN' );
  header( 'X-XSS-Protection: 1;mode=block' );
  header_remove('X-Powered-By');

  
  $stmt = $conn->prepare("SELECT * FROM ibilbideak WHERE Id=?"); 
  $stmt->bind_param("s", $id);
  $stmt->execute(); 
  $res= $stmt->get_result(); 
  $row = mysqli_fetch_array($res);


 
 ?>

 <script>
window.onload = function(){killerSession();}
function killerSession(){
	setTimeout("window.open('saioaItxi.php','_top');",300000); //5 minuturo
}
</script>


<!DOCTYPE html>
    
<html lang="es">

<header>
<meta http-equiv="Content-Security-Policy" content="default-src 'none';">
</header>

 <link
      rel="stylesheet"
       type=text/css
      href="./ibilbideaAldatu.css"
    />
 
 
 <body>
<form class="login-form" action="ibilbideAldaketaEgin.php" method="POST" id="ibilbideaAldatu">
<input name="csrf" type="hidden" value="<?php echo $_SESSION['token']; ?>">
  <p class="login-text">
    <img src="../irudiak/mendia.png"  width="90" >  
  <br/>
  </p>
  <p style="font-size: 20px;margin: 0px 0; color:white">Ibilbidearen izena:</p>
   <input type= "Izena" name="Izena" class="login-info" <?php echo" value='{$row['Ibilbidearen_izena']}'";?>/>
   
  <p style="font-size: 20px;margin: 0px 0; color:white">Zailtasuna:</p>
  <input type="Zailtasuna" name="Zailtasuna" class="login-info" id="Zailtasuna" <?php echo" value='{$row['Zailtasuna']}'";?>/>
  
  <p style="font-size: 20px;margin: 0px 0; color:white">Distantzia (m):</p>
 <input type= "Distantzia" name="Distantzia" class="login-info" id="Distantzia" <?php echo" value='{$row['Distantzia_m']}''";?>/>
 
  <p style="font-size: 20px;margin: 0px 0; color:white">Desnibela (m):</p>
  <input type ="Desnibela" name="Desnibela" class="login-info" id="Desnibela" <?php echo" value='{$row['Desnibela_m']}'";?>/>
  
  <p style="font-size: 20px;margin: 0px 0; color:white">Link-a:</p>
  <input type= "Link-a"name="Link-a" class="login-info" <?php echo" value='{$row['Link']}''";?>/>
  
  <input type="submit" name="Aldatu" value="Aldatu" class="ezabatu-gehitu-submit" />
  <script src="../js/ibilbidea.js"></script>

  
</form>
<a href="erabiltzailearenMenua.php" class="erregistro-itzuli">Itzuli</a>


<div class="underlay-photo"></div>
<div class="underlay-black"></div> 


  </body>
 </html>
 
