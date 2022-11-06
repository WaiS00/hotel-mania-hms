<?php 

  require_once 'SQL_login.php';

  			// sanitise the post variables
			  $myusername = sanitise($pdo,$_POST['username']);
			  $mypassword = sanitise($pdo,$_POST['pwd']);
			  //hashing of password
			  $mypassword = password_hash($mypassword, PASSWORD_DEFAULT);
			  $telno      = sanitise($pdo,$_POST['telno']);
			  $address    = sanitise($pdo,$_POST['address']);
			  $email      = sanitise($pdo,$_POST['email']);
			  $fullName   = sanitise($pdo,$_POST['full_name']);
			  $ic   = sanitise($pdo,$_POST['ic_num']);
				$tbl_name = 'userdb';
				$tbl_name1 = 'customerdb';

      // get email on where the user input = email
      // so that it can detect if there is any duplication of email
      $query4 = "SELECT email FROM userdb WHERE email = $email ";
      $result3 = $pdo->query($query4);
      $result3 = $result3->fetch(PDO::FETCH_ASSOC);
      
      $email1 = $result3['email'];


	// count the number of email where the email = email that matches the input from register.php
	$sql = "SELECT count(*) AS counter FROM userdb WHERE email = ?";
	$stmt = $pdo->prepare($sql);
	$stmt->execute([$email1]);
	$counts = $stmt->fetch();

	// get username on where the user input = username
    // so that it can detect if there is any duplication of username
      $query5 = "SELECT login FROM userdb WHERE login = $myusername ";
      $result4 = $pdo->query($query5);
      $result4 = $result4->fetch(PDO::FETCH_ASSOC);
      
      $myusername1 = $result4['login'];


	// count the number of username where the username = username that matches the input from register.php
	$sql = "SELECT count(*) AS counter FROM userdb WHERE login = ?";
	$stmt = $pdo->prepare($sql);
	$stmt->execute([$myusername1]);
	$counts2 = $stmt->fetch();

	if($counts['counter'] == 1){
		echo "<script type='text/javascript'>alert('Email Existed, Please proceed with login');</script>";
		echo "<script type='text/javascript'>window.location.href = './login.php';</script>";
	}else if ($counts2['counter'] == 1){
		echo "<script type='text/javascript'>alert('Username Existed, Please proceed with login');</script>";
		echo "<script type='text/javascript'>window.location.href = './login.php';</script>";
	}else{
		  // if username and password has been filled in and submitted, 
		  if(isset($_POST['username']) && isset($_POST['pwd'])){
	
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
					VALUES(NULL,$fullName, $telno, $address, $email, $myusername, '$mypassword', 'customer')";
					
					$result = $pdo->query($query);
		
					// select user id where email = the email from post method
					$query3 = "SELECT userid FROM userdb WHERE email=$email";
					$result2 = $pdo->query($query3);
					$result2 = $result2->fetch(PDO::FETCH_ASSOC);
					
					$userID = $result2['userid'];
		
					// insert values from the previous variables
					$query2 = "INSERT INTO $tbl_name1 (customerId, icNumber, userid) 
					VALUES(NULL, $ic, $userID)";
					$result = $pdo->query($query2);
		
					if (! $result){
						die('Error: ');
					}
					// success message
					echo "<script type='text/javascript'>alert('Registered Successfully');</script>";
					echo "<script type='text/javascript'>window.location.href = './login.php';</script>";
				}
				else{
					// echo invalid data for the inputs
					echo $validation;
				}
			  }
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
	  }
  }
?>
