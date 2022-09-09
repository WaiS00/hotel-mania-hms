<?php require_once 'backend/create_account_backend.php';?>
<?php require_once "backend/config.php"; ?>

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
    <script type="text/javascript" src="js/booking.js"> </script>
    <title>Hotel Mania</title>
    <link rel="icon" href="resources/hm_logo.png" />
</HEAD>

<body>

	<?php include 'include_php/header.php';?>
	<form method="post">
		<table class="center">
			<legend>Register Account (Worker, Manager)</legend>
			<tr>
				<td><label>Username</label></td>
				<td><input type="text" name="username" class="form-control" required />
			</tr>
			<tr>
				<td><label>Password</label></td>
				<td><input type="password" name="pwd" class="form-control" required />
			</tr>
			<tr>
				<td><label>Re-Enter Password</label></td>
				<td><input type="password" required  class="form-control" />
			</tr>
			<tr>
				<td><label>Full Name</label></td>
				<td><input type="text" name= "full_name" class="form-control" required  />
			</tr> 
			<tr>
				<td><label>Telephone No</label></td>
				<td><input type="text" name="telno"  class="form-control" required />
			</tr> 
				<tr>
				<td><label>Address</label></td>
				<td><input type="text" name="address" class="form-control" required  />
			</tr> 
			<tr>
				<td><label>Email</label></td>
				<td><input type="text" name ="email" class="form-control" required />
			</tr>	
            <tr>
				<td><label>Worker Type</label></td>
				<td>
                <select id="ddlselect" name="ddlselect" required>
                    <option value="" selected disabled>Select Worker Type </option>
                    <option value="manager">Manager</option>
                    <option value="worker">Worker</option>
                </select>
			</tr>	
			<tr>
				<td><label>Work Position</label></td>
				<td>
                <select id="ddlselect1" name="ddlselect1" required>
                    <option value="" selected disabled>Select Work Position </option>
                    <option value="Cleaning Workers">Cleaning Workers</option>
                    <option value="Front Desk Workers">Front Desk Workers</option>
                </select>
			</tr>				
            <tr>
				<td><label>Job Status</label></td>
				<td>
                <select id="ddlselect2" name="ddlselect2" required>
                    <option value="" selected disabled>Select Job Status </option>
                    <option value="Full Time">Full Time</option>
                    <option value="Part Time">Part Time</option>
                    <option value="Intern">Intern</option>
                </select>
			</tr>																												
			<tr>
				<td></td>
				<td><input type="submit" value="Submit" class="btn btn-primary submitbtn"></td>
			</tr>
		</table>		
	</form>
	<?php include 'include_php/footer.php';?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>

