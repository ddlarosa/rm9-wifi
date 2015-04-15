<?php include_once "helper/scanning_signals.php"; ?>
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
          <li role="presentation" ><a href="index.php">Home</a></li>
          <li role="presentation" class="active"><a href="#">Scanning Wireless</a></li>
          <li role="presentation"><a href="logout.php">Log out</a></li>
        </ul>
       <br/><br/>
       <div class="row marketing">
        <div class="col-lg-6">
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
              <th>Operation</th>
            <thead>
            <?php $essid=""; ?>
            <?php foreach ($wifi_networks_parsed as $key => $wifi) { ?>
              <tr>
               <?php foreach ($wifi as $key2 => $value){ ?>
                 <?php if(strpos($key2,"ESSID")!==FALSE){$essid=str_replace('"','',$value);} ?>
                 <td>
                   <?php echo($value); ?> 
                 </td> 
               <?php } ?>
               <td><a href="connect.php?essid=<?php echo($essid); ?>">Connect</a></td>
              </tr>
            <?php } ?>
          </table>
        </div>
    </div>
  </body>
</html>
