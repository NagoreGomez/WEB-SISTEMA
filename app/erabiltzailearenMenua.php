
<?php 

  require "konexioa.php";
  session_start();
  
  $email= $_SESSION['Email'];
  $izena= $_SESSION['Izen abizenak'];
  

  
  
  
  $ibilbideak = mysqli_query($conn, "SELECT * FROM `ibilbideak` WHERE `Email` = '$email'")

/*
while ($row = mysqli_fetch_array($ibilbideak)) {
  echo
   "<tr>
    <td>{$row['Ibilbidearen Izena']}</td>
    <td>{$row['Zailtasuna']}</td>
    <td>{$row['Distantzia (m)']}</td>
    <td>{$row['Desnibela (m)']}</td>
    <td>{$row['Link-a']}</td>
   </tr>";
   

}


*/



  
 ?>

<!DOCTYPE html>
<html lang="es">
 <link
      rel="stylesheet"
       type=text/css
      href="./erabiltzailearenMenua.css"
    />
 
 
 <body>
<form class="login-form" action="erabiltzailearenMenua.php" method="POST" >
  <p class="login-text">
    <span class="fa-stack fa-lg">
       <!-- <i class="fa fa-user fa-solid-2x"></i> -->
      <p style="font-size: 20px;margin: 0px 0; color:white">Hauek dira zure ibilbideak:</p>
       
       <table class="taula-erabiltzailea">
            <thead class="thead-taula">
              <tr>
                <th scope="col">Ibilbidearen izena</th>
                <th scope="col">Zailtasuna</th>
                <th scope="col">Distantzia (m)</th>
                <th scope="col">Desnibela (m)</th>
                <th scope="col">Link-a</th>
                <th scope="col">Aldatu</th>  <!-- ????-->
                <th scope="col">Ezabatu</th>
              </tr>
            </thead>
            <tbody>
              <?php      
              while($row=mysqli_fetch_array($ibilbideak)){
                echo
                "<tr>
                  <td>{$row['Ibilbidearen Izena']}</td>
                  <td>{$row['Zailtasuna']}</td>         
                  <td>{$row['Distantzia (m)']}</td>
                  <td>{$row['Desnibela (m)']}</td>
                  <td><a href='{$row['Link-a']}' class='badge badge-info' target='blank'>Link-a</a></td> <!-- investigarr  -->
                 <!-- INVESTIGARRR <td><a href='apunteaAldatu.php?id={$row['Id']}' class='badge badge-warning'>editatu</a></td>  -->
                  <td><button id='btnModal' type='button' class='badge badge-danger' data-id='{$row['Id']}' data-toggle='modal' data-target='#modalEzabatu'>Aldatu</button></td>
                  <td><button id='btnModal' type='button' class='badge badge-danger' data-id='{$row['Id']}' data-toggle='modal' data-target='#modalEzabatu'>Ezabatu</button></td>
                </tr>";
              }
              ?>
            </tbody>
          </table> 
       
       
       
    </span>
  </p>
  <p>
  </p><input type="submit" name="Ezabatu" value="Ezabatu" class="ezabatu-gehitu-submit" />
  <input type="submit" name="Ibilbide berria gehitu" value="Ibilbide berria gehitu" class="ezabatu-gehitu-submit" />
  
</form>
<a href="index.php" class="erregistro-itzuli">Itzuli</a>


<div class="underlay-photo"></div>
<div class="underlay-black"></div> 


  </body>
 </html>
