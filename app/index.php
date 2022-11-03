<?php
 

require "konexioa.php";

session_start();


if (empty($_SESSION['token'])) {
  $_SESSION['token'] = bin2hex(random_bytes(32));
}


$token = $_SESSION['token'];



if (!empty($_POST['csrf'])) {
  if (hash_equals($_SESSION['token'], $_POST['csrf'])) {
    // Procesar el formulario
    if($conn){
	    $email= $_POST['Email'];
	    $pasahitza= $_POST['Pasahitza'];
	    $izena= $_POST['Izen abizenak'];
	    
	    
	    $sql ="SELECT * FROM `erabiltzaileak` WHERE `Email` = '$email' and `Pasahitza` = '$pasahitza'";
	    $query = mysqli_query($conn,$sql);
	    $row = mysqli_fetch_array($query);

	    if($row['Email']!=null){ #erabiltzailea erregistratuta egotekotan 
	      $_SESSION['Email'] = $email;  
	      $_SESSION['Izen abizenak'] =$row['Izen abizenak'] ; 
	      header("Location: http://localhost:81/erabiltzailearenMenua.php");
	      exit;      
	    }
    }
   
 } else {
    // Posible petición malintencionada
    // Se recomienda guardar este acceso en un log
    echo("hacer cpsassss????");
  }
}
    
    
    
header( 'X-Content-Type-Options: nosniff' );
header( 'X-Frame-Options: SAMEORIGIN' );
header( 'X-XSS-Protection: 1;mode=block' );
 
  
  
?>
<!DOCTYPE html>
<html lang="es">
 <link
      rel="stylesheet"
       type=text/css
      href="./index.css"
    />
 
 
 <body>
 
<form class="login-form" action="index.php" method="POST" > 
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
  
  
