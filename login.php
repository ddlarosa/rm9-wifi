<!DOCTYPE html>
<html>
  <head>
    <title>WIFI RM9</title>
    <!-- Bootstrap core CSS -->
    <link href="app/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="app/dist/css/bootstrap.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <?php if(isset($_GET['error']) && $_GET['error']=="1") { ?> 
        <div class="alert alert-danger">Incorrect user and password</div>
      <?php } ?>
      <div class="page-header text-center">
        <h1>WIFI RM9</h1>
      </div>
       <div class="row marketing">
        <div class="col-lg-6 text-center">
          <form action="/helper/autentication.php" method="POST" >
            <h2></h2>
            <b>User Name</b><br/>
            <input id="password" type="text" name="username"></input><br/><br/> 
            <b>Password</b><br/>
            <input id="password" type="password" name="password"></input><br/><br/>
            <input type="submit" class="btn btn-success" value="Connect"/><br/>
          </form>
        </div>
       </div>
    </div>
  </body>
</html>
