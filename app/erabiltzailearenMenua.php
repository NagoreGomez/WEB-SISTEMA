<?php

require "konexioa.php";

session_start();
    $nan= $_POST['NAN'];
    $izena= $_POST['Izen abizenak']
    $jaio= $_POST['Jaiotze data'];
    $email= $_POST['Email'];
    $telefonoa= $_POST['Telefonoa'];
    $pasahitza= $_POST['Pasahitza'];
    
    $sql ="INSERT INTO `erabiltzaileak` VALUES ('$nan', '$izena', '$jaio', '$email', '$telefonoa', '$pasahitza')
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);
 



?>
