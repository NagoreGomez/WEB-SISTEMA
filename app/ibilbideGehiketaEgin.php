<?php 

  require "konexioa.php";
  
  session_start();
  
  $id= $_GET['id'];
  $email= $_SESSION['Email'];
  $izena= $_SESSION['Izen abizenak'];



  
  #id-arekin ibilbidearen izena lortu
  $sql="SELECT * FROM `ibilbideak` WHERE `Id` = '$id'";
  $query=mysqli_query($conn, $sql) or die (mysqli_error($conn));
  $row = mysqli_fetch_array($query);
  $izena=$row['Ibilbidearen izena'];

  header( 'X-Content-Type-Options: nosniff' );
  header( 'X-Frame-Options: SAMEORIGIN' );
  header( 'X-XSS-Protection: 1;mode=block' );
  header_remove('X-Powered-By');
  
  #konprobatu ez duela izen hori duen ibilbidea
  $konprobaketa="SELECT * FROM `ibilbideak` WHERE `Ibilbidearen izena` = '$izena' AND `Email`='$email'";
  $result=mysqli_query($conn, $konprobaketa);
  $row_cnt = mysqli_num_rows($result);
	  if($row_cnt==0){
	  	#ibilbidea ez badu, ibilbidearen gainerako informazioa bilatu
	  	$sql="SELECT * FROM `ibilbideak` WHERE `Ibilbidearen izena` = '$izena'";
		$query = mysqli_query($conn, $sql) or die (mysqli_error($conn));
		$row = mysqli_fetch_array($query);

		$zailtasuna=$row['Zailtasuna'];
		$distantzia=$row['Distantzia (m)'];
		$desnibela=$row['Desnibela (m)'];
		$link=$row['Link-a'];

		
		if (!empty($email)){
			$sql2="INSERT INTO `ibilbideak` (`Email`, `Ibilbidearen izena`,`Zailtasuna`,`Distantzia (m)`,`Desnibela (m)`,`Link-a` ) VALUES ('$email', '$izena', '$zailtasuna','$distantzia', '$desnibela', '$link')";
		
			$query2 = mysqli_query($conn, $sql2) or die (mysqli_error($conn));
	   		if($query2){
	    			header("Location: http://localhost:81/erabiltzailearenMenua.php");   
	    			exit;
			}
		}
	}
	else{
		header("Location: http://localhost:81/ibilbideZerrenda.php");   
	    	exit;
	}
	
  

  
 ?>
 
 <html>
 <header>
<meta http-equiv="Content-Security-Policy" content="default-src 'none' ;" >
</header>
 </html>

