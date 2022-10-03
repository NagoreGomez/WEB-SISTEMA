<?php
 

require "konexioa.php";

session_start();

 

$query = mysqli_query($conn, "SELECT * FROM erabiltzaileak")
  or die (mysqli_error($conn));

while ($row = mysqli_fetch_array($query)) {
  echo
   "<tr>
    <td>{$row['NAN']}</td>
    <td>{$row['Izen abizenak']}</td>
    <td>{$row['Telefonoa']}</td>
    <td>{$row['Jaiotze data']}</td>
    <td>{$row['Email']}</td>
    <td>{$row['Pasahitza']}</td>
   </tr>";
   

}

  #header("Location: http://localhost:81/saioaHasi.php");
  #exit;
  
  
?>
<!DOCTYPE html>
<html lang="es">
 <link
      rel="stylesheet"
       type=text/css
      href="./index.css"
    />
 
 
 <body>
 
<form class="login-form">
  <p class="login-text">
    <span class="fa-stack fa-lg">
       <i class="fa fa-user fa-solid-2x"></i>
      
    </span>
  </p>
  <input type="email" class="login-username" autofocus="true" required="true" placeholder="Helbide elektronikoa" />
  <input type="password" class="login-password" required="true" placeholder="Pasahitza" />
  <input type="submit" name="Login" value="Login" class="login-submit" />
  
</form>
<a href="#" class="login-erregistro">Erregistratu nahi duzu?</a>
<div class="underlay-photo"></div>
<div class="underlay-black"></div> 

  </body>
 </html>

