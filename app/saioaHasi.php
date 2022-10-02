<?php
#require "index.php";

#Session_start();


 
    echo '<h1>Yeah, it worksaaaa!<h1>';
 
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


?>
