<?php 

  require "konexioa.php";
  session_start();
  
  $email= $_SESSION['Email'];
  $izena= $_SESSION['Izen abizenak'];
 
  
    
  $ibilbideak = mysqli_query($conn, "SELECT * FROM `ibilbideak` WHERE `Email` = '$email'")

  
 ?>

<!DOCTYPE html>
<html lang="es">
 <link
      rel="stylesheet"
       type=text/css
      href="./erabiltzailearenMenua.css"
    />
 
 
 <body>
<form class="login-form" action="ibilbideaGehitu.php" method="POST" >        <!-- HAU ALDATU-->
  <p class="login-text">
  <img src="../irudiak/mendia.png"  width="90" >  
  <br/>
  
      <p style="font-size: 20px;margin: 0px 0; color:white">Hauek dira zure ibilbideak:</p>
     <br/>
       
        <table class="taula-erabiltzailea">
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
                echo
                "<tr>
                  <td class=letra>{$row['Ibilbidearen izena']}</td>
                  <td class=letra>{$row['Zailtasuna']}</td>         
                  <td class=letra>{$row['Distantzia (m)']}</td>
                  <td class=letra>{$row['Desnibela (m)']}</td>
                 <td class=letra><button id='btnModal' type='button'><a href='{$row['Link-a']}'>Link-a</button></td>          
                  <td class=letra><button id='btnModal' type='button' class=aldatu-submit><a href='ibilbideaAldatu.php?id={$row['Ibilbidearen izena']}'> Aldatu</a></td>
                  <td class=letra><button id='btnModal' type='button' class=ezabatu-submit><a href='ibilbideEzabaketaEgin.php?id={$row['Ibilbidearen izena']}'> Ezabatu</button></td>
                </tr>";
                
              }
              ?> <!-- HAU ALDATU, BOTOIEN LINKA-->
            </tbody>
          </table> 
  

  </p>

  <input type="submit" name="Ibilbide berria gehitu" value="Ibilbide berria gehitu" class="ezabatu-gehitu-submit" />   
</form>

<a href="index.php" class="erregistro-itzuli">Itzuli</a>   


<div class="underlay-photo"></div>
<div class="underlay-black"></div> 


  </body>
 </html>
