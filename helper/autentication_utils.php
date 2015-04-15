<?php 

  function create_session() 
  {
    return session_start();

  }//create_seesion

  function insert_validation($username,$password)
  {
    // Store Session Data
    $_SESSION['login_user']=$username;  // Initializing Session with value of PHP Variable
    $_SESSION['login_password']=$password;

  }//insert_validation

  function is_valid_user()
  {
    create_session();

    // Valid user and password
    if(isset($_SESSION['login_user']) && ($_SESSION['login_user']=="admin") 
       && isset($_SESSION['login_password']) && (isset($_SESSION['login_password'])=="RM9admin"))
    {
      return true;
    }
    else
    {
      header('Location: ../login.php'); 
      return false;
    }

  }// is_valid
  
  function logout()
  {
    session_start(); # NOTE THE SESSION START
    $_SESSION = array(); 
    session_unset();
    session_destroy();
  }

?>
