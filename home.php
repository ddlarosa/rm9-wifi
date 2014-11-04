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
        <h1>MUSICAM</h1>
      </div>
        <ul class="nav nav-pills" role="tablist">
          <li role="presentation" class="active"><a href="#">Home</a></li>
          <li role="presentation"><a href="wifi_scanning.php">Scanning Wireless</a></li>
        </ul>
       <div class="row marketing">
        <div class="col-lg-6">
          <h3>Wi-Fi </h3>
          <?php $status_arr=status();
                echo($status_arr[0]); 
                $ip_arr=get_ip();
                echo("<br/>");
                echo($ip_arr[1]);
         ?>
        </div>
       </div>
    </div>
  </body>
</html>
