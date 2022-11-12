<?php
 

require "konexioa.php";

#session.cookie_httponly;  si se pone esto hay k ponerlo en otras y empieza a dar antijickjaking alert
session_start();





if(!empty($_GET['txarto'])) {
	$error = 1; 
}
else $error = 0;



if (empty($_SESSION['token'])) {
  $_SESSION['token'] = bin2hex(random_bytes(32));
}



header( 'X-Content-Type-Options: nosniff' );
header( 'X-Frame-Options: SAMEORIGIN' );
header( 'X-XSS-Protection: 1;mode=block' );
header('X-Powered-By: ');





  
?>
<!DOCTYPE html>
<html lang="es">

<header>
<meta http-equiv="Content-Security-Policy" content="default-src 'none' ;" >
</header>

 <link
      rel="stylesheet"
       type=text/css
      href="./index.css"
    />
 

 <body>
 
<form class="login-form" action="log.php" method="POST" > 
<input name="csrf" type="hidden" value="<?php echo $_SESSION['token']; ?>">

  <p class="login-text" >
  <img src="../irudiak/mendia.png"  width="90" >
  </p>
  <input type="email" name="Email" class="login-info" autofocus="true" required="true" placeholder="Helbide elektronikoa" />
  <input type="password"  name="Pasahitza"  class="login-info" required="true" placeholder="Pasahitza" />
  <input type="submit" name="Login" value="Login" class="login-submit" />
  
</form>
<a class="login-erregistro" href="erregistratu.php" >Erregistratu nahi duzu?</a>


<div class="underlay-photo"></div>
<div class="underlay-black"></div> 

  </body>
 </html>
 

  
