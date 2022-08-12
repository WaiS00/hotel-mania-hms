<?php require_once 'backend/register_backend.php';?>

<!DOCTYPE html>
<html lang="en">

<HEAD>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link href="css/register.css" type="text/css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Hotel Mania</title>
    <link rel="icon" href="resources/hms_logo.png" />
</HEAD>

<body>
	<?php include 'include_php/header.php';?>
	<form method="post">
		<table width="450" class="center">
			<h1 class="titleName">Register</h1>
			<tr>
				<td><label>Username</label></td>
				<td><input type="text" name="username" />
			</tr>
			<tr>
				<td><label>Password</label></td>
				<td><input type="password" name="pwd" />
			</tr>
			<tr>
				<td><label>Re-Enter Password</label></td>
				<td><input type="password"  />
			</tr>
			<tr>
				<td><label>Telephone No</label></td>
				<td><input type="text" name="telno"  />
			</tr> 
				<tr>
				<td><label>Address</label></td>
				<td><input type="text" name="address"  />
			</tr> 
			<tr>
				<td><label>Email</label></td>
				<td><input type="text" name ="email"  />
			</tr>
			<tr>
				<td><label>Full Name</label></td>
				<td><input type="text" name= "full_name"  />
			</tr> 
																																		
			<tr>
				<td></td>
				<td><input type="submit" value="Submit" class="submitbtn"></td>
			</tr>
		</table>		
	</form>
	<?php include 'include_php/footer.php';?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>

