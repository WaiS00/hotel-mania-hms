<?php include_once 'backend/edit_timeslot_backend.php';?>
<?php require_once "backend/config.php"; ?>
<?php require_once 'backend/editaction.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <script type="text/javascript" src="../js/booking.js"> </script>
    <title>Hotel Mania</title>
    <link href="css/timeslot.css" type="text/css" rel="stylesheet" />
    <link rel="icon" href="resources/hm_logo.png"/>
</head>

<?php include 'include_php/header.php';?>

<div class= "container form2">
	<form method="post">
		<table class="table">
        <h1 class="titleName">Edit Timeslot</h1>
			<tr> 
				<td>Full Name</td>
				<td><input type="text" name="fullName" value="<?php echo $fullName;?>"></td>
			</tr>
			<tr> 
				<td>Job Status</td>
				<td><input type="text" name="jobStatus" value="<?php echo $jobStatus;?>"></td>
			</tr>
			<tr> 
				<td>User Type</td>
				<td><input type="text" name="userType" value="<?php echo $userType;?>"></td>
			</tr>
            <tr> 
            <td>Working Position</td>
            <td>
                <select id="ddlselect" name="ddlselect" required>
                    <option value="" selected disabled>Select Working Position</option>
                    <option value="Front-desk Workers" >Front-desk Workers</option>
                    <option value="Cleaning Workers" >Cleaning Workers</option>
                </select>
            </td>
			</tr>
			<tr>
				<td><input type="hidden" name="workerId" value=<?php echo $_GET['workerId'];?>></td>
				<td><input id="Button" type="submit" value="update" name="update" class="btn btn-primary submitbtn"></td>
			</tr>
		</table>
	</form>
</div>

<body>


<?php include 'include_php/footer.php';?>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>