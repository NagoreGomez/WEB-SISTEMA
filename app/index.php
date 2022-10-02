<?php
 

require "konexioa.php";

session_start();

 

$query = mysqli_query($conn, "SELECT * FROM usuarios")
   or die (mysqli_error($conn));

while ($row = mysqli_fetch_array($query)) {
  echo
   "<tr>
    <td>{$row['NAN']}</td>
    <td>{$row['Izen abizenak']}</td>
    <td>{$row['Telefonoa']}</td>
    <td>{$row['Jaiotze data']}</td>
    <td>{$row['Email']}</td>
   </tr>";
   

}

  #header("Location: http://localhost:81/saioaHasi.php");
  #exit;
  
   


?>
