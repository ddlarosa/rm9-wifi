<?php include_once "./helper/connetion.php"; ?>
<?php
  $essid=$_POST['essid'];
  $password=$_POST['password'];
  create_interfaces($essid,$password);
  echo("<p>Conectado a la wifi ".$essid."</p>"); 
  ifupwlan0();
  echo("<p>Comprobar ips</p>");
?>

