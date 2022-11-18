<?php

  session_start();
  $email= $_SESSION['Email'];
  header_remove('X-Powered-By');
  
  session_destroy();
  
  error_log("127.0.0.1 $email [".date('r')."] 'Saioa itxi'".PHP_EOL,3,"./log/login.log");
  header("Location: http://localhost:81/index.php");
  
    
    
?>
