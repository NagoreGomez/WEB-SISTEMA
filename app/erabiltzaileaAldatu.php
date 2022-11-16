<?php 

  require "konexioa.php";
  
  ini_set('session.cookie_httponly', 1); 
  session_start();
  
  $email= $_SESSION['Email'];
  
  header( 'X-Content-Type-Options: nosniff' );
  header( 'X-Frame-Options: SAMEORIGIN' );
  header( 'X-XSS-Protection: 1;mode=block' );
  header_remove('X-Powered-By');
  
  
  $stmt = $conn->prepare("SELECT * FROM erabiltzaileak WHERE email=?"); 
  $stmt->bind_param("s", $email);
  $stmt->execute(); 
  $resEmail= $stmt->get_result(); 
  $row = mysqli_fetch_array($resEmail);
  
  
  
 

 
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
<meta http-equiv="Content-Security-Policy" content="default-src 'self' ;" >
</header>

 <link
      rel="stylesheet"
       type=text/css
      href="./erabiltzaileaAldatu.css"
    />
 
 
 <body>
<form class="login-form" action="erabiltzaileAldaketaEgin.php" method="POST" id="erabiltzaileAldatu">
<input name="csrf" type="hidden" value="<?php echo $_SESSION['token']; ?>">

  <p class="login-text">
    <img src="../irudiak/mendia.png"  width="90" >  
  <br/>
  </p>
  <p style="font-size: 20px;margin: 0px 0; color:white">Helbide elektronikoa:</p>
   <input type= "Email" name="Email" class="izena"<?php echo" value='{$email}'";?> readonly/>
   
  <p style="font-size: 20px;margin: 0px 0; color:white">Izen abizenak:</p>
  <input type="Izena" name="Izena" class="login-info" id="Izena" <?php echo" value='{$row['Izen_abizenak']}'";?>/>
  
   <p style="font-size: 20px;margin: 0px 0; color:white">NAN:</p>
 <input type= "NAN" name="NAN" class="login-info" id="NAN" <?php echo" value='{$row['NAN']}''";?>/>
  
  <p style="font-size: 20px;margin: 0px 0; color:white">Telefonoa:</p>
 <input type= "Telefonoa" name="Telefonoa" class="login-info" id="Telefonoa" <?php echo" value='{$row['Telefonoa']}''";?>/>
 
  <p style="font-size: 20px;margin: 0px 0; color:white">Jaiotze data:</p>
  <input type ="Jaiotza" name="Jaiotza" class="login-info" id="Jaiotza" <?php echo" value='{$row['Jaiotze_data']}'";?>/>
  
  <p style="font-size: 20px;margin: 0px 0; color:white">Pasahitza:</p>
  <input type= "Pasahitza"name="Pasahitza" class="login-info" id="Pasahitza"/>
  
    <p style="font-size: 20px;margin: 0px 0; color:white">Pasahitz berria:</p>
  <input type= "PasahitzaBerria"name="PasahitzaBerria" class="login-info" id="PasahitzaBerria"/>
  
  
  <input  value="Aldatu" class="ezabatu-gehitu-submit" type="submit"/>
   
  
  <script src="../js/erabiltzaileAldatu.js"></script>

  
</form>
<a href="erabiltzailearenMenua.php" class="erregistro-itzuli">Itzuli</a>


<div class="underlay-photo"></div>
<div class="underlay-black"></div> 


  </body>
 </html>
 
