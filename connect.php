<?php include_once "helper/scanning_signals.php"; ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Wifi configuration RM9</title>

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
          <li role="presentation" ><a href="index.php">Home</a></li>
          <li role="presentation" class="active"><a href="wifi_scanning.php">Scanning Wireless</a></li>
        </ul>
       <div class="row marketing">
        <div class="col-lg-6">
          <form action="go_connection.php" method="POST" >
            <br/><br/>
            <h2><?php echo($_GET["essid"]); ?></h2>
            <b>Password</b><br/>
            <input type="hidden" name="essid" value="<?php echo($_GET["essid"]); ?>"/>
            <input type="text" name="password"></input><br/><br/>
            <input type="checkbox" name="vehicle" value="Bike"> Show password<br/>
            <input type="checkbox" name="vehicle" value="Car" checked> Opciones avanzadas<br/><br/>
            <input type="submit" value="Connect"/><input type="button" value="Cancel"/>
          </form>
        </div>
    </div>
  </body>
</html>
