<?php
function get_interface(){
 $interfaces=array();
 exec('cat /etc/network/interfaces',$interfaces);
 return $interfaces;
}
?>
