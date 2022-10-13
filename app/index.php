<?php
 

require "konexioa.php";

session_start();

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
    
    
    

 /*
 $query = mysqli_query($conn, "SELECT * FROM erabiltzaileak WHERE `Email` = '$email'")
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

*/

 
  
  
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
  
