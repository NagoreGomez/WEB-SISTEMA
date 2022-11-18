<?php
$host = $_SERVER['HTTP_HOST'];
require "konexioa.php";
  

session_start();

$email= $_SESSION['Email'];



header( 'X-Content-Type-Options: nosniff' );
header( 'X-Frame-Options: SAMEORIGIN' );
header( 'X-XSS-Protection: 1;mode=block' );
header_remove('X-Powered-By');



if($conn){
    $izena= $_POST['Izena'];
    $zailtasuna= $_POST['Zailtasuna'];
    $distantzia= $_POST['Distantzia'];
    $desnibela= $_POST['Desnibela'];
    $link= $_POST['Link'];
  
    $stmt = $conn->prepare("INSERT INTO ibilbideak (`Email`,`Ibilbidearen_izena`, `Zailtasuna`,`Distantzia_m`,`Desnibela_m`,`Link`) VALUES (?,?,?,?,?,?)"); 
    $stmt->bind_param("sssiis", $email, $izena, $zailtasuna,$distantzia, $desnibela, $link);

  
    
     if($stmt->execute()){
        header("Location: http://localhost:81/erabiltzailearenMenua.php");
        exit;
      }

}

?>

<script>
window.onload = function(){killerSession();}
function killerSession(){
	setTimeout("window.open('saioaItxi.php','_top');",180000); //3 minuturo
}
</script>


<!DOCTYPE html>
<html lang="es">
<header>
<meta http-equiv="Content-Security-Policy" content="default-src 'none'; ">
</header>

 <link
      rel="stylesheet"
       type=text/css
      href="./ibilbideaGehitu.css"
    />
 
 
 <body>
<form class="login-form" action="ibilbideaGehitu.php" method="POST" id= "ibilbideaGehitu">
<input name="csrf" type="hidden" value="<?php echo $_SESSION['token']; ?>">
  <p class="login-text" >
  <img src="../irudiak/mendia.png"  width="90" >
  </p>
  <input type="Izena" name="Izena" class="login-info" autofocus="true" required="true" placeholder="Ibilbidearen izena" id="Izena"/>
  <input type="Zailtasuna" name="Zailtasuna" class="login-info" autofocus="true" required="true" placeholder="Erraza/Ertaina/Zaila" id="Zailtasuna" />
  <input type="Distantzia" name="Distantzia" class="login-info" autofocus="true" required="true" placeholder="Distantzia (metrotan)"  id="Distantzia"/>
  <input type="Desnibela" name="Desnibela" class="login-info" autofocus="true" required="true" placeholder="Desnibela (metrotan)" id="Desnibela"/>
  <input type="Link" name="Link" class="login-info" autofocus="true" required="true" placeholder="Link-a" />

  <input name="Gehitu" value="Ibilbidea gehitu" class="erregistratu-submit"  type="submit" />
  <script src="../js/ibilbideaGehitu.js"></script>
  
</form>
<a href="erabiltzailearenMenua.php" class="erregistro-itzuli">Itzuli</a>


<div class="underlay-photo"></div>
<div class="underlay-black"></div> 


  </body>
 </html>
 
