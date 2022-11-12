<?php 

  require_once 'SQL_login.php';
// check if password same with the comfirm password
$myusername = $_POST['username'];
$mypassword = $_POST['pwd'];
$cfmpassword = $_POST['cfmpassword'];

if($cfmpassword == $mypassword){
  // if username and password has been filled in and submitted, 
  if(isset($_POST['username']) && isset($_POST['pwd'])){
	
	// sanitise the post variables
	$myusername = sanitise($pdo,$_POST['username']);
	$mypassword = sanitise($pdo,$_POST['pwd']);
	//hashing of password
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

	// username must be within 5 to 20 characters
	$validation = data_validation($_POST['username'], "/^[a-z\d_]{5,20}$/" , "username");
	// password must have one letter, one digit, and be within 6 to 12 characters
  	$validation .= data_validation($_POST['pwd'], '/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{6,12}$/', "password- at least one letter, at least one number, and there have to be 6-12 characters");
 	// must be a valid email (with smtg@smtg.smtg)
	$validation .= data_validation($_POST['email'],  "/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/" , "email");
	// must have space between characters
  	$validation .= data_validation($_POST['full_name'], "/.+/", "full Name");

		if($validation==""){
			// insert values
			$query = "INSERT INTO $tbl_name (userid, fullName, telno,address, email, login, pass, userType) 
			VALUES(NULL,$fullName, $telno, $address, $email, $myusername, '$mypassword', '$userType')";
			
			$result = $pdo->query($query);

			// select user id where email = the email from post method
			$query3 = "SELECT userid FROM userdb WHERE email=$email";
			$result2 = $pdo->query($query3);
			$result2 = $result2->fetch(PDO::FETCH_ASSOC);
			
			$userID = $result2['userid'];

			// select full name where email = the email from post method
			$query4 = "SELECT fullName FROM userdb WHERE email=$email";
			$result3 = $pdo->query($query4);
			$result3 = $result3->fetch(PDO::FETCH_ASSOC);
			
			$fullName1 = $result3['fullName'];

			// insert values from the previous variables
			$query2 = "INSERT INTO $tbl_name1 (workerId, fullName, jobStatus, userType, workPosition, userid) 
			VALUES(NULL, '$fullName1', '$jobStatus', '$userType', '$workPosition', '$userID')";
			$result = $pdo->query($query2);

			if (! $result){
				die('Error: ');
			}
			// success message
			echo "<script type='text/javascript'>alert('Account Registered Successfully');</script>";
			echo "<script type='text/javascript'>window.location.href = './worker_manager_list.php';</script>";
		}
		else{
			// echo invalid data for the inputs
			echo $validation;
		}
	  }
	}else{
		echo "<script type='text/javascript'>alert('Wrong password, password do not match');</script>";
	}




	  // sanitise method
   function sanitise($pdo, $str)
  {
    $str = htmlentities($str);
    return $pdo->quote($str);
  }	
  
  // method for calling error for invalid data
  function data_validation($data, $data_pattern, $data_type)
  {
	  if(preg_match($data_pattern, $data)) {
		  return "";
	  }
	  else {
      echo "<script type='text/javascript'>alert('invalid data for $data_type');</script>";
		  return "location:./create_account.php";
	  }
  }
?>
