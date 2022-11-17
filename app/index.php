<?php


require "konexioa.php";


ini_set('session.cookie_httponly', "1");  	# Cookie No HttpOnly Flag
#ini_set('session.cookie_samesite', "Lax");  #no funciona pq es para php 7.3




session_start();



if(!empty($_GET['txarto'])) {
	$error = 1; 
}
else $error = 0;

header("Set-Cookie: path=/; HttpOnly; SameSite=Lax");

if (empty($_SESSION['token'])) {  
	$bytes= hash('sha256',openssl_random_pseudo_bytes(32));
	#$bytes = openssl_random_pseudo_bytes(32);
	$_SESSION['token'] = bin2hex($bytes);  

}


#header( 'Content-Type: text/css' );
header( 'X-Content-Type-Options: nosniff' );
header( 'X-Frame-Options: SAMEORIGIN' );
header( 'X-XSS-Protection: 1;mode=block' );
header_remove('X-Powered-By');



?>

<!DOCTYPE html>
<html lang="es">

<header>
<meta http-equiv="Content-Security-Policy" content="default-src 'none';" >
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
