<?php include_once "helper/status.php"; ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Wifi Configuration RM9</title>

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
        <h1>Wifi configuration RM9</h1>
      </div>
        <ul class="nav nav-pills" role="tablist">
          <li role="presentation" class="active"><a href="#">Home</a></li>
          <li role="presentation"><a href="wifi_scanning.php">Scanning Wireless</a></li>
        </ul>
       <div class="row marketing">
        <div class="col-lg-6">
          <h3>Wi-Fi </h3>
          <?php 
            $ip_arr=get_ip();
            $mac=explode(" ",$ip_arr[0]);
            $ips=explode(" ",$ip_arr[1]);
            $dns=get_dns();
            $get_way=get_route();
          ?>
            <b>MAC: </b><?php echo($mac[9]); ?><br/> 
            <b>IP: </b><?php echo(substr($ips[11],5)); ?><br/>     
            <b>Mask: </b><?php echo(substr($ips[15],5)); ?><br/>
            <b>GW: </b><?php echo(substr($get_way[2],7,20)); ?><br/>
            <b>DNS1: </b><?php echo(substr($dns[1],10)); ?><br/>
            <b>DNS2: </b><?php echo(substr($dns[2],10)); ?><br/>
        </div>
       </div>
    </div>
  </body>
</html>
