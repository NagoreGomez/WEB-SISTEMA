<?php 

  require "konexioa.php";
  
  session_start();
  
  header( 'X-Content-Type-Options: nosniff' );
  header( 'X-Frame-Options: SAMEORIGIN' );
  header( 'X-XSS-Protection: 1;mode=block' );
  header_remove('X-Powered-By');
  
  $email= $_SESSION['Email'];

  $izena=$_POST['Izena'];
  $nan= $_POST['NAN'];
  $telefonoa= $_POST['Telefonoa'];
  $jaiotza= $_POST['Jaiotza'];
  $pasahitza= $_POST['Pasahitza'];
  $pasahitzaBerria= $_POST['PasahitzaBerria'];
  
  $stmt = $conn->prepare("SELECT * FROM erabiltzaileak WHERE email=?"); 
  $stmt->bind_param("s", $email);
  $stmt->execute(); 
  $resEmail= $stmt->get_result(); 
  $row = mysqli_fetch_array($resEmail);
  
  $hash_zaharra =$row['Pasahitza'] ;  #email horren hash pasahitza lortu
  
  if (password_verify($pasahitza, $hash_zaharra)) { #pasahitzak konparatu  
	
	$hash_berria= password_hash($pasahitzaBerria, PASSWORD_DEFAULT); #pasahitz berriaren hash-a kalkulatu
	
	
	$stmt = $conn->prepare("UPDATE erabiltzaileak SET NAN = ?, Izen_abizenak = ?, Telefonoa = ?, Jaiotze_data = ?, Pasahitza = ? WHERE Email= ?"); 
	$stmt->bind_param("ssisss", $nan,$izena, $telefonoa,$jaiotza, $hash_berria,$email);

	if($stmt->execute()){
		header("Location: http://localhost:81/erabiltzailearenMenua.php"); 
		exit;
	}
  }  
  	 
?>
 <html lang="es">

<header>
<meta http-equiv="Content-Security-Policy" content="default-src 'self' ;" >
</header>

</html>
 


 
