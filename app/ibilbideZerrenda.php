<?php 

  require "konexioa.php";
  session_start();
  
  $email= $_SESSION['Email'];
  $izena= $_SESSION['Izen abizenak'];
  
 
  
  $ibilbideak = mysqli_query($conn, "SELECT * FROM `ibilbideak` WHERE `email` NOT IN ('$email')");
  
  header( 'X-Content-Type-Options: nosniff' );
  header( 'X-Frame-Options: SAMEORIGIN' );
  header( 'X-XSS-Protection: 1;mode=block' );
  header_remove('X-Powered-By');
  
 ?>

<!DOCTYPE html>
<html lang="es">

<header>
<meta http-equiv="Content-Security-Policy" content="default-src 'none' ;" >
</header>

 <link
      rel="stylesheet"
       type=text/css
      href="./ibilbideZerrenda.css"
    />
 
 
 <body>
<form class="login-form" action="ibilbideaGehitu.php" > 
<input name="csrf" type="hidden" value="<?php echo $_SESSION['token']; ?>">       
  <p class="login-text">
  <!-- <img src="../irudiak/erabiltzailea.png"  width="100" >  -->
  <img src="../irudiak/mendia.png"  width="100" > 
     <br/>
  <br/>
  
      <p style="font-size: 20px;margin: 0px 0; color:white">Hau da Menditrack-eko ibilbide zerrenda:</p>
     <br/>
       
        <table class="taula-erabiltzailea">
            <thead class="thead-taula">
              <tr>
                <th scope="col"<td style="border: solid 3px white ;"><font color="white">Ibilbidearen izena</th>
                <th scope="col"<td style="border: solid 3px white ;"><font color="white">Nork sortu du</th>
                <th scope="col"<td style="border: solid 3px white ;"><font color="white">Zailtasuna</th>
                <th scope="col"<td style="border: solid 3px white ;"><font color="white">Distantzia (m)</th>
                <th scope="col"<td style="border: solid 3px white ;"><font color="white">Desnibela (m)</th>
                <th scope="col"<td style="border: solid 3px white ;"><font color="white">Ibilbidearen link-a</th>
                <th scope="col"<td style="border: solid 3px white ;"><font color="white">Aldatu</th>  
              </tr>
            </thead>
            <tbody>
              <?php  
              
               
              while($row=mysqli_fetch_array($ibilbideak)){
                echo
                "<tr>
                
                  <td class=letra>{$row['Ibilbidearen izena']}</td>
                  <td class=letra>{$row['Email']}</td>
                  <td class=letra>{$row['Zailtasuna']}</td>         
                  <td class=letra>{$row['Distantzia (m)']}</td>
                  <td class=letra>{$row['Desnibela (m)']}</td>
                 <td class=letra><button id='btnModal' type='button'><a href='{$row['Link-a']}'>Link-a</button></td>          
                  <td class=letra><button id='btnModal' type='button' class=aldatu-submit><a href='ibilbideGehiketaEgin.php?id={$row['Id']}'> Gehitu</a></td>
                </tr>";
                
              }
              ?> 
            </tbody>
          </table> 
  

  </p>
   
</form>

<a href="erabiltzailearenMenua.php" class="erregistro-itzuli">Itzuli</a>   


<div class="underlay-photo"></div>
<div class="underlay-black"></div> 


  </body>
 </html>
