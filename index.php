<?php include_once "helper/status.php"; ?>
<?php include_once "helper/base.php"; ?>
<?php include_once "helper/autentication_utils.php"; ?>

<?php is_valid_user(); ?>

<!DOCTYPE html>
<html>
  <head>
    <title>WIFI RM9</title>

    <!-- Bootstrap core CSS -->
    <link href="app/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="page-header">
        <h1>WIFI RM9</h1>
      </div>
        <ul class="nav nav-pills" role="tablist">
          <li role="presentation" class="active"><a href="#">Home</a></li>
          <li role="presentation"><a href="wifi_scanning.php">Scanning Wireless</a></li>
          <li role="presentation"><a href="logout.php">Log out</a></li>
        </ul>
       <div class="row marketing">
        <div class="col-lg-6">
          <?php 
            $wlan0=check_wlan0();
            $has_ip=have_ip();
            $ip_arr=get_ip();
            $mac=explode(" ",$ip_arr[0]);
            $ips=explode(" ",$ip_arr[1]);
            $dns=get_dns();
            $get_way=get_route();
            $result_iwconfig=get_iwconfig();
            $ESSID=$result_iwconfig[0];
            $ESSID_init=strpos($ESSID,"ESSID:");
            $Nickname_init=strpos($ESSID,"Nickname");
            $ESSID_str=substr($ESSID,$ESSID_init,$Nickname_init);
            $ESSID_str=str_replace("\"","",$ESSID_str);
            $ESSID_str=str_replace("ESSID:","",$ESSID_str);
            $ESSID_str=str_replace("Nickname:","",$ESSID_str);
            $BitRate=$result_iwconfig[2];
            $BitRate_str=substr($BitRate,0,strpos($BitRate,"Sensitivity"));
            $BitRate_str=str_replace("Bit Rate:","",$BitRate_str);
            $Quality=$result_iwconfig[5];
            $Quality_str=substr($Quality,0,strpos($Quality,"Signal"));
            $Quality_str=str_replace("Link Quality=","",$Quality_str);
          ?>
          <h3><?php echo($ESSID_str); ?>  </h3>
          <?php if(($wlan0==TRUE) && ($has_ip==TRUE)) { ?>  
            <b>Estado:</b> Conectado<br/>
            <b>Quality: </b><?php echo($Quality_str); ?><br/>
	    <b>Speed: </b><?php echo($BitRate_str); ?><br/> 
            <b>MAC: </b><?php echo($mac[9]); ?><br/> 
            <b>IP: </b><?php echo(substr($ips[11],5)); ?><br/>     
            <b>Mask: </b><?php echo(substr($ips[15],5)); ?><br/>
            <b>GW: </b><?php echo(substr($get_way[2],7,20)); ?><br/>
            <b>DNS1: </b><?php echo(substr($dns[1],10)); ?><br/>
            <b>DNS2: </b><?php echo(substr($dns[2],10)); ?><br/>
         <?php } else if ($wlan0==FALSE){ ?>
            <p>Please, check if wireless device is plugged</p>
         <?php } else{ ?>
            <p>You are not connected, please settings your wireless configuration</p> 
         <?php } ?>
        </div>
       </div>
    </div>
  </body>
</html>
