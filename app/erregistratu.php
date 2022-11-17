<?php
require "konexioa.php";
  


session_start();


header( 'X-Content-Type-Options: nosniff' );
header( 'X-Frame-Options: SAMEORIGIN' );
header( 'X-XSS-Protection: 1;mode=block' );
header_remove('X-Powered-By'); 
#header("Set-Cookie: path=/;  HttpOnly; SameSite=Lax");

if(!empty($_GET['txarto'])) {
	$error = 1; 
}
else $error = 0;



if (empty($_SESSION['token'])) {
	$bytes= hash('sha256',openssl_random_pseudo_bytes(32));
	#$bytes = openssl_random_pseudo_bytes(32);
	$_SESSION['token'] = bin2hex($bytes); 
}




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
      href="./erregistratu.css"
    />

 <body>
<form class="login-form" action="erregistratuEgin.php" method="POST" id="erregistroa">
<input name="csrf" type="hidden" value="<?php echo $_SESSION['token']; ?>">
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

 
