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
  
  function get_dns(){
    $result_dns=array();
    exec('cat /etc/resolv.conf',$result_dns);
    return $result_dns;
  }
  
  function get_route(){
    $result_getway=array();
    exec('/sbin/route',$result_getway);
    return $result_getway;
  }

?>
