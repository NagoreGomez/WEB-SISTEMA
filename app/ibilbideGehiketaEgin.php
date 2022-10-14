<?php 

  require "konexioa.php";
  
  session_start();
  
  $ibilbidea= $_GET['id'];
  $email= $_SESSION['Email'];
  $izena= $_SESSION['Izen abizenak'];
 
  $konprobaketa="SELECT * FROM `ibilbideak` WHERE `Ibilbidearen izena` = '$ibilbidea' AND `Email`='$email'";
  
  $result=mysqli_query($conn, $konprobaketa);
  $row_cnt = mysqli_num_rows($result);
  if($row_cnt==0){
  	$sql="SELECT * FROM `ibilbideak` WHERE `Ibilbidearen izena` = '$ibilbidea'";
	  $query = mysqli_query($conn, $sql)
	   or die (mysqli_error($conn));
	   $row = mysqli_fetch_array($query);
	   
	   
	$izena=$row['Ibilbidearen izena'];
	$zailtasuna=$row['Zailtasuna'];
	$distantzia=$row['Distantzia (m)'];
	$desnibela=$row['Desnibela (m)'];
	$link=$row['Link-a'];



	   $sql2="INSERT INTO `ibilbideak` (`Email`, `Ibilbidearen izena`,`Zailtasuna`,`Distantzia (m)`,`Desnibela (m)`,`Link-a` ) VALUES ('$email', '$izena', '$zailtasuna','$distantzia', '$desnibela', '$link')";
	  
	   $query2 = mysqli_query($conn, $sql2)
	    or die (mysqli_error($conn));
	   
	   	if($query2){
	    		header("Location: http://localhost:81/erabiltzailearenMenua.php");   
	    		exit;
		}
	}
	else{
		header("Location: http://localhost:81/ibilbideZerrenda.php");   
	    	exit;
	}
  

  






 ?>


 
