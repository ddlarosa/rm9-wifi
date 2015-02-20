<?php include_once "helper/scanning_signals.php"; ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Wifi configuration RM9</title>

    <!-- Bootstrap core CSS -->
    <link href="app/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Link to Bootstrap core javascript -->
    <script src="app/dist/js/bootstrap.js"></script>

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
            <input id="password" type="password" name="password"></input>
            <input type="submit" class="btn btn-success" value="Connect"/><br/>
            <input type="checkbox" onchange="document.getElementById('password').type = this.checked ? 'text' : 'password'"> Show password<br/><br/>
            <a class="btn btn-warning" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Advanced Options</a><br/>
            <div class="collapse" id="collapseExample">
             <div class="well">
               <b>IP</b><br/>
               <input name="ip" type="text"></input><br/><br/>
               <b>Getway</b><br/>
               <input name="getway" type="text"></input><br/><br/>
               <b>Net Mask</b><br/>
               <input name="netmask" type="text"></input><br/><br/>
               <b>DNS 1<b/><br/>
               <input name="dns1" type=""></input><br/><br/>
               <b>DNS 2<b/><br/>
               <input name="dns2" type="text"></input><br/><br/>
            </div>
           </div>
          </form>
        </div>
    </div>
  </body>
</html>
