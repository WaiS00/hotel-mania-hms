<?php require_once 'backend/checkout_backend.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/checkout.css">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <title>Hotel Mania</title>
    <link rel="icon" href="resources/hm_logo.png"/>
</head>

<?php include 'include_php/header.php';?>

<body>

<form method="post">
<h4>Check-Out</h4>
    <table class="center">
        <tr>
            <td><label>IC Number</label></td>
            <td><input type="text" name="ic" class="form-control" required />
        </tr>
        <tr>
            <td><label>Room Number</label></td>
            <td><input type="text" name="roomSelected" class="form-control" required />
        </tr>
        <tr>
            <td></td>
            <td><input id="Button" type="submit" value="Submit" name="submit" class="btn btn-primary submitbtn"></td>
        </tr>
	</table>
</form>

<?php include 'include_php/footer.php';?>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>