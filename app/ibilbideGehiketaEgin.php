<?php 

  require "konexioa.php";
  
  session_start();
  
  header( 'X-Content-Type-Options: nosniff' );
  header( 'X-Frame-Options: SAMEORIGIN' );
  header( 'X-XSS-Protection: 1;mode=block' );
  header_remove('X-Powered-By');
  
  $id= $_GET['id'];
  $email= $_SESSION['Email'];
  $izena= $_SESSION['Izen abizenak'];


#id-arekin ibilbidearen izena lortu
  $stmt = $conn->prepare("SELECT * FROM ibilbideak WHERE Id=?"); 
  $stmt->bind_param("i", $id);
  $stmt->execute(); 
  $res= $stmt->get_result(); 
  $row = mysqli_fetch_array($res);
  $izena=$row['Ibilbidearen_izena'];


#konprobatu ez duela izen hori duen ibilbidea
  $stmt = $conn->prepare("SELECT * FROM ibilbideak WHERE Ibilbidearen_izena=? AND Email=?"); 
  $stmt->bind_param("ss", $izena,$email);
  $stmt->execute(); 
  $res= $stmt->get_result(); 
  $row_cnt = mysqli_num_rows($res);
	  
	  if($row_cnt==0){
	  	#ibilbidea ez badu, ibilbidearen gainerako informazioa bilatu
	  	$stmt = $conn->prepare("SELECT * FROM ibilbideak WHERE Ibilbidearen_izena=?"); 
		$stmt->bind_param("s", $izena);
		$stmt->execute(); 
		$res= $stmt->get_result(); 
		$row= mysqli_fetch_array($res);

		$zailtasuna=$row['Zailtasuna'];
		$distantzia=$row['Distantzia_m'];
		$desnibela=$row['Desnibela_m'];
		$link=$row['Link'];

		
		if (!empty($email)){
			$stmt = $conn->prepare("INSERT INTO ibilbideak (`Email`, `Ibilbidearen_izena`,`Zailtasuna`,`Distantzia_m`,`Desnibela_m`,`Link`) VALUES (?,?,?,?,?,?)"); 
			$stmt->bind_param("sssiis", $email, $izena, $zailtasuna,$distantzia, $desnibela, $link);
	   		if($stmt->execute()){
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

