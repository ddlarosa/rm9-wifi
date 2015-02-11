<?php
  function check_wlan0(){
  
    $wlan0=FALSE;

    $result_ip=array();
    exec('/sbin/ifconfig wlan0',$result_ip);

    if(count($result_ip)>0){
      $wlan0=TRUE;
    }
  
    return $wlan0;
  }

  function have_ip(){

    $have_ip=FALSE;

    $result_ip=array();
    exec('/sbin/ifconfig wlan0',$result_ip);
    $my_ip=implode($result_ip);

    if(strpos($my_ip,"inet")>0){$have_ip=TRUE;}

    return $have_ip;

  }
   
?>
