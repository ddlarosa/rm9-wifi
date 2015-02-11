<?php
function get_interface(){
 $interfaces=array();
 exec('cat /etc/network/interfaces',$interfaces);
 return $interfaces;
}

function clone_interface(){
  $clone=true;
  $clone=$clone=exec('/var/www/scripts/copy_interfaces.sh');
  return $clone;
} 

function write_interface($interface_str){
 $file_created=file_put_contents("/etc/network/interfaces",$interface_str);
 return $file_created;
}

function ifdownwlan0(){
  return exec('ifdown wlan0');
}

function ifupwlan0(){
  return exec('ifup wlan0');
}

function create_interfaces($essid,$password){
 
 $interfaces=get_interface();
 $write=FALSE;
 $interface_output="";

 foreach($interfaces as $key => $value){

   $ssid=false;
   $psk=false;

   if(strpos($value,"allow-hotplug")!==FALSE){
     $write=TRUE;
     $interface_output.="allow-hotplug wlan0\n";
     $interface_output.="iface wlan0 inet dhcp\n";
     $interface_output.="wpa-ssid \"".$essid."\"\n";
     $interface_output.="wpa-psk \"".$password."\"\n";
     $interface_output.="\n";
   }
   else if($write==FALSE){
     $interface_output.=$value."\n";
   }
 }
 
 write_interface($interface_output);
 $result_clone=clone_interface();
}
?>
