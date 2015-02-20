<?php

function read_template($type)
{
  $array_interface=array();
 
  switch ($type)
  {
    case 0:
        $array_interface=file('./dchp_both.txt',2); 
        break;
    case 1:
        $array_interface=file('./static_both.txt',2);
        break;
    case 2:
        $array_interface=file('./eth_dhcp_wlan_static.txt',2);
        break;
    case 3:
        $array_interface=file('./eth_static_wlan_dchp.txt',2);
        break;
  }

  $array_interface=array_filter($array_interface);

  return $array_interface;
}

function both_dhcp($ssid,$password)
{

  $array_template=read_template(0);
  $array_template_new=array();

  foreach ($array_template as $key=>$value)
  {
    if(strpos($value,"wpa-ssid")!==FALSE){   
      $ssid_new=str_replace("my_ssid",$ssid,$value);
      $array_template_new[$key]=$ssid_new;
    }
    else if(strpos($value,"my_password")!==FALSE)
    {
      $password_new=str_replace("my_password",$password,$value);
      $array_template_new[$key]=$password_new;
    }
    else
    {
      $array_template_new[$key]=$value; 
    }
  }

  return $array_template_new;
}

function write_interfaces($array_template_new)
{
  $str="";
  foreach($array_template_new as $key=>$value)
  {
    if((strpos($value,"allow-hotplug wlan0")!==FALSE) || (strpos($value,"iface lo inet loopback")!==FALSE))
    {
      $str.="\n";
    } 
    $str.="$value\n";
  } 

  return $str;
}

$array_template_new=both_dhcp("Musicam","Musi2015rivas");
$my_interface=write_interfaces($array_template_new);
echo("$my_interface");

?>
