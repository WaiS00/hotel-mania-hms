<?php
  require_once 'SQL_login.php';

  try
  {
    $pdo = new PDO($attr, $user, $pass, $opts);
  }
  catch (\PDOException $e)
  {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
  }

if(isset($_POST['username']) && isset($_POST['pwd'])){
	
    $un_temp = sanitise($pdo,$_POST['username']);
    $pw_temp = sanitise($pdo,$_POST['pwd']);
    $query   = "SELECT * FROM userdb WHERE login=$un_temp";
    $result  = $pdo->query($query);
    $tbl_name = 'userdb';

    if (!$result->rowCount()){
      // if user not found in database
      echo "<script type='text/javascript'>alert('User Not Found, Please Register.');</script>";
      echo "<script type='text/javascript'>window.location.href = './register.php';</script>";
    }

    $row = $result->fetch();
    $fn  = $row['fullName'];
    $un  = $row['login'];
    $pw  = $row['pass'];
    $ty  = $row['userType'];

    if (password_verify( $pw_temp, $pw))
    {
      session_start();

      $_SESSION['fullName'] = $fn;
      $_SESSION['userType'] = $ty;

      if($_SESSION['userType'] == 'customer'){
        echo "<script type='text/javascript'>alert('Login Successfully');</script>";
        echo "<script type='text/javascript'>window.location.href = './index.php';</script>";
      }else if($_SESSION['userType'] == 'worker'){
        echo "<script type='text/javascript'>window.location.href = './index.php';</script>";
      }


    }
    else echo "<script type='text/javascript'>alert('Incorrect username/ password');</script>";
  }

  function sanitise($pdo, $str)
  {
    $str = htmlentities($str);
    return $pdo->quote($str);
  }
?>
