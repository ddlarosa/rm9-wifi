<?php 
 $result=array();
 exec('ifdown wlan0',$result);
 print_r($result);
 return $result;
?>
