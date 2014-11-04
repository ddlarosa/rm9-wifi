<?php 

  function status(){
    $result_status=array();
    exec('/sbin/iwconfig wlan0',$result_status);
    return $result_status;
  } 

  function get_ip(){
    $result_ip=array();
    exec('/sbin/ifconfig wlan0',$result_ip);
    return $result_ip;
  } 

?>
