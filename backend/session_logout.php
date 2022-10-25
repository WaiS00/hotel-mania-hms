<?php 
  session_start();

  if (isset($_SESSION['fullName']))
  {
    $name = htmlspecialchars($_SESSION['fullName']);
    // call function to destroy session
    destroy_session_and_data();
    //logout success
    echo "<script type='text/javascript'>alert('Logout Successfully');</script>";
    echo "<script type='text/javascript'>window.location.href = '../login.php';</script>";
  }
  else echo "Please <a href='./login.php'>Click Here</a> to log in.";
  
  function destroy_session_and_data()
{
  // unset session variables
   unset($_SESSION['name']);
   $_SESSION = array();
   session_unset();
   setcookie(session_name(), '', time() - 2592000, '/');
   session_destroy();
}

?>
