<?php
  echo '<h1>Yeah, it works!<h1>';
  // phpinfo();
  $hostname = "db";
  $username = "admin";
  $password = "test";
  $db = "database";

  $conn = mysqli_connect($hostname,$username,$password,$db);
  if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
  }

 header("Location: http://localhost:81/saioaHasi.php");


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

echo '<h1>Yeah, it works!<h1>';




?>
