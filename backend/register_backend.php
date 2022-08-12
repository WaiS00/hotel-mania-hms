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

	$validation = data_validation($_POST['username'], "/^[a-z\d_]{5,20}$/" , "username");
  	$validation .= data_validation($_POST['pwd'], '/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{6,12}$/', "password- at least one letter, at least one number, and there have to be 6-12 characters");
 	$validation .= data_validation($_POST['email'],  "/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/" , "email");
  	$validation .= data_validation($_POST['full_name'], "/.+/", "full Name");
	
	  if ($_POST['username'] == "" || $_POST['pwd'] == "" || $_POST['telno'] == "" || $_POST['address'] == "" || $_POST['email'] == ""|| $_POST['full_name'] == "") {
		echo "<script type='text/javascript'>alert('Field not filled');</script>";
		
	  }else{
		if($validation==""){
			$query = "INSERT INTO $tbl_name (userid, name, telno,address, email, login, pass, type) 
			VALUES(NULL,$fullName, $telno, $address, $email, $myusername, '$mypassword', 'customer')";
		
			$result = $pdo->query($query);

		if (! $result){
			die('Error: ');
		}
		echo "<script type='text/javascript'>alert('Registered Successfully');</script>";
		echo "<script type='text/javascript'>window.location.href = './login.php';</script>";
		}
		else{
		echo $validation;
	}
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
