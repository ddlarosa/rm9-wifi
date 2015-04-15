<?php 

require_once('autentication_utils.php');


if(isset($_POST['username']) && ($_POST['username']=="admin") && 
   isset($_POST['password']) && ($_POST['password']=="RM9admin"))
{
  if(create_session())
  {
    insert_validation($_POST['username'],$_POST['password']); 
    header('Location: ../index.php'); 
  }
}
else
{
  header('Location: ../login.php?error=1');
}


?>
