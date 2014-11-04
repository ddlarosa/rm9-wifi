<?php include_once "helper/scanning_signals.php"; ?>

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
          <li role="presentation" ><a href="#">Home</a></li>
          <li role="presentation" class="active"><a href="#">Scanning Wireless</a></li>
        </ul>
       <div class="row marketing">
        <div class="col-lg-6">
          <h3>Wi-Fi </h3>
          <p></p>
          <?php $wifi_networks=get_wifi_networks();
            $wifi_networks_parsed=parse_wifi_networks($wifi_networks);
            //show_wifi_networks($wifi_networks_parsed);
          ?>
 
          <table class="table">
            <thead>
              <th>SSID</th>
              <th>Frecuency</th>
              <th>Encryption</th>
              <th>Type of Encryption</th>
              <th>Quality</th>
            <thead>
            <?php foreach ($wifi_networks_parsed as $key => $wifi) { ?>
              <tr>
               <?php foreach ($wifi as $key2 => $value){ ?>
                 <td><?php echo($value); ?></td> 
               <?php } ?>
              </tr>
            <?php } ?>
          </table>
        </div>
    </div>
  </body>
</html>
