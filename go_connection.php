<?php include_once "./helper/connetion.php"; ?>
<?php
  $essid=$_POST['essid'];
  $password=$_POST['password'];
  $interfaces=get_interface();
 
  foreach($interfaces as $key => $value){

   $ssid=false;
   $psk=false;

   if(strpos($value,"wpa-ssid")!==FALSE)
   { echo("wpa-ssid \"".$essid."\""); 
     echo("<br/>");
     $ssid=true;
   }
 
   if(strpos($value,"wpa-psk")!==FALSE)
   { echo("wpa-psk \"".$password."\"");
     echo("<br/>");
     $psk=true; 
   }
   
   if($ssid==false && $psk==false)
   {  
     echo($value);echo("<br/>");
   }
  }
?>
