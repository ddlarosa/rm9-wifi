<?php
   function get_wifi_networks()
   {
     $networks = array();
     exec('/sbin/iwlist scanning',$result_scanning);
   
     $cont=0;
     $key="";

     foreach ($result_scanning as $valor) {

      if(strpos($valor,"Cell") == TRUE)
      {
        $networks[$valor]=array(); 
        $key=$valor;
      }
      elseif($cont>0)
      {
        $networks[$key][$cont]=$valor;
      }
       
      $cont++;

     }
  
    return $networks;

   }

   function show_wifi_networks($networks){
     foreach($networks as $network){
       foreach($network as $field){
         echo("$field<br/>");
       }
       echo("<br/><br/><br/><br/>");
     }
   }

   function parse_wifi_networks($networks){
     
     $mini_network=array();
     $cont=0;

     foreach($networks as $network){
       
       foreach($network as $field){

         if(strpos($field,"ESSID")!==FALSE)
         {
           $aux_arr=explode(":",$field);
           $key=$aux_arr[0];
           $value=$aux_arr[1];
           $mini_network[$cont][$key]=$value; 
         }

         if(strpos($field,"Frequency")!==FALSE){
           $aux_arr=explode(":",$field);
           $key=$aux_arr[0];
           $value=$aux_arr[1];
           $mini_network[$cont][$key]=$value;
         } 

         if(strpos($field,"Encryption key")!==FALSE){
           $aux_arr=explode(":",$field);
           $key=$aux_arr[0];
           $value=$aux_arr[1];
           $mini_network[$cont][$key]=$value;
         }

         if(strpos($field,"WPA")!==FALSE){
           $aux_arr=explode(":",$field);
           $key=$aux_arr[0];
           $value=$aux_arr[1];
           $mini_network[$cont][$key]=$value;
         }

         if(strpos($field,"Quality")!==FALSE){
           $aux_arr=explode("=",$field);
           $key=$aux_arr[0];
           $value=$aux_arr[1];
           $mini_network[$cont][$key]=$value;
         }


       }
       $cont++;
     }
     return $mini_network; 
   }

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Wifi Configuration RM9</title>
  </head>
  <body>
    <div style="margin:20px">
      <ul class="nav nav-pills">
        <li><a href="#">Client Configuracion</a></li>
        <li><a href="#">Scanning Networks</a></li>
      </ul>
    </div>
    <div class="container"> 
      <?php $wifi_networks=get_wifi_networks();
            //show_wifi_networks($wifi_networks);
            $wifi_networks_parsed=parse_wifi_networks($wifi_networks);
            show_wifi_networks($wifi_networks_parsed);
       ?>
    </div>
  </body>
</html>
