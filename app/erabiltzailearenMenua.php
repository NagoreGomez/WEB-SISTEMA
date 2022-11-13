<?php 

  require "konexioa.php";
  session_start();
  
  
  $email= $_SESSION['Email'];
  $izena= $_SESSION['Izen abizenak'];
 
  header( 'X-Content-Type-Options: nosniff' );
  header( 'X-Frame-Options: SAMEORIGIN' );
  header( 'X-XSS-Protection: 1;mode=block' );
  header_remove('X-Powered-By');
  
    
  $ibilbideak = mysqli_query($conn, "SELECT * FROM `ibilbideak` WHERE `Email` = '$email'")

  
 ?>

<!DOCTYPE html>
<html lang="es">

<header>
<meta http-equiv="Content-Security-Policy" content="default-src 'none' ;" >
</header>


 <link
      rel="stylesheet"
       type=text/css
      href="./erabiltzailearenMenua.css"
    />

 <body>
 
<div class="login-form">   
  <p class="login-text">
  <!-- <img src="../irudiak/erabiltzailea.png"  width="100" >  -->
  <img src="../irudiak/Menditrack.png"  width="100" > 
     <br/>
  <?php  echo $email;?>
 <br/>
   <a href="erabiltzaileaAldatu.php" class="profila-aldatu">Profila editatu</a> 
  <a href="saioaItxi.php" class="profila-aldatu">Saioa itxi</a>
   <br/>
  
      <p style="font-size: 20px;margin: 0px 0; color:white">Hauek dira zure ibilbideak:</p>
     <br/>
       
        <table class="taula">
            <thead class="thead-taula">
              <tr>
                <th scope="col"<td style="border: solid 3px white ;"><font color="white">Ibilbidearen izena</th>
                <th scope="col"<td style="border: solid 3px white ;"><font color="white">Zailtasuna</th>
                <th scope="col"<td style="border: solid 3px white ;"><font color="white">Distantzia (m)</th>
                <th scope="col"<td style="border: solid 3px white ;"><font color="white">Desnibela (m)</th>
                <th scope="col"<td style="border: solid 3px white ;"><font color="white">Ibilbidearen link-a</th>
                <th scope="col"<td style="border: solid 3px white ;"><font color="white">Aldatu</th>  <!-- ????-->
                <th scope="col"<td style="border: solid 3px white ;"><font color="white">Ezabatu</th>
              </tr>
            </thead>
            <tbody>
              <?php  
               
              while($row=mysqli_fetch_array($ibilbideak)){
             $id= $row['Id'];

                echo
                "<tr>
                  <td class=letra>{$row['Ibilbidearen izena']}</td>
                  <td class=letra>{$row['Zailtasuna']}</td>         
                  <td class=letra>{$row['Distantzia (m)']}</td>
                  <td class=letra>{$row['Desnibela (m)']}</td>
                 <td class=letra><button id='btnModal' type='button'><a href='{$row['Link-a']}'>Link-a</button></td>                           
                  <td class=letra><button id='btnModal' type='button' class=aldatu-submit><a href='ibilbideaAldatu.php?id={$row['Id']}'> Aldatu</a></td>                  
                   <td class=letra><button  class=ezabatu-submit onclick='ezabatuKonfirmazioa(".$id.")' >Ezabatu</button></td> 
                </tr>"; 
              }
              ?> 
              

          <script type='text/javascript' src="../js/ezabatuKonfirmazioa.js"></script>
            </tbody>
          </table> 
  

  </p>
    <a href="ibilbideaGehitu.php" class="ezabatu-gehitu-submit">Ibilbide berria gehitu</a>
    <a href="ibilbideZerrenda.php" class="ezabatu-gehitu-submit">Ibilbidea inportatu</a>
    
</div>

<a href="index.php" class="erregistro-itzuli">Itzuli</a>   


<div class="underlay-photo"></div>
<div class="underlay-black"></div> 


  </body>
 </html>
