<?php 

  require_once 'SQL_login.php';

  if(isset($_POST['username']) && isset($_POST['pwd'])){
	
	$myusername = sanitise($pdo,$_POST['username']);
	$mypassword = sanitise($pdo,$_POST['pwd']);
	$mypassword = password_hash($mypassword, PASSWORD_DEFAULT);
	$telno      = sanitise($pdo,$_POST['telno']);
	$address    = sanitise($pdo,$_POST['address']);
	$email      = sanitise($pdo,$_POST['email']);
	$fullName   = sanitise($pdo,$_POST['full_name']);
  	$tbl_name = 'userdb';
  	$tbl_name1 = 'workerdb';
    $userType = $_POST['ddlselect'];
    $workPosition = $_POST['ddlselect1'];
    $jobStatus = $_POST['ddlselect2'];

	$validation = data_validation($_POST['username'], "/^[a-z\d_]{5,20}$/" , "username");
  	$validation .= data_validation($_POST['pwd'], '/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{6,12}$/', "password- at least one letter, at least one number, and there have to be 6-12 characters");
 	$validation .= data_validation($_POST['email'],  "/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/" , "email");
  	$validation .= data_validation($_POST['full_name'], "/.+/", "full Name");

		if($validation==""){
			$query = "INSERT INTO $tbl_name (userid, fullName, telno,address, email, login, pass, userType) 
			VALUES(NULL,$fullName, $telno, $address, $email, $myusername, '$mypassword', '$userType')";
			
			$result = $pdo->query($query);

			$query3 = "SELECT userid FROM userdb WHERE email=$email";
			$result2 = $pdo->query($query3);
			$result2 = $result2->fetch(PDO::FETCH_ASSOC);
			
			$userID = $result2['userid'];

			$query2 = "INSERT INTO $tbl_name1 (workerId, jobStatus, workPosition, userid) 
			VALUES(NULL, '$jobStatus', '$workPosition', '$userID')";
			$result = $pdo->query($query2);

			if (! $result){
				die('Error: ');
			}
			echo "<script type='text/javascript'>alert('Account Registered Successfully');</script>";
			echo "<script type='text/javascript'>window.location.href = './index.php';</script>";
		}
		else{
			echo $validation;
		}
	  }




   function sanitise($pdo, $str)
  {
    $str = htmlentities($str);
    return $pdo->quote($str);
  }	
  
  function data_validation($data, $data_pattern, $data_type)
  {
	  if(preg_match($data_pattern, $data)) {
		  return "";
	  }
	  else {
      echo "<script type='text/javascript'>alert('invalid data for $data_type');</script>";
		  return "location:./register.php";
	  }
  }
?>
