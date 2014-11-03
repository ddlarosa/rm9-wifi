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
 
  function get_network_details($network)
  {
    $network_details=array("SSID"=>"",
                           "Encryption key"=>"",
                           "Quality"=>"");
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
            show_wifi_networks($wifi_networks);
       ?>
      <table>
       <thead>
         <tr>
          <th>ESSID</th>
          <th>Encryption key</th>
         </tr> 
       </thead>
       <tbody>
         <tr>
           <td></td>
           <td></td>
         </tr>
       </tbody>
      </table> 
    </div>
  </body>
</html>
