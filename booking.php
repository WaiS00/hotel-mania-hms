<?php session_start();?>
<?php require_once "backend/config.php"; ?>
<?php require_once 'backend/booking_backend.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/booking.css">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <title>Hotel Mania</title>
    <script type="text/javascript" src="js/booking.js"> </script>
    <link rel="icon" href="resources/hm_logo.png"/>
</head>

<?php include 'include_php/header.php';?>

<body>

<?php
        $query = "SELECT roomType FROM product_list";
        $product_array = $product_db->getRoomType($query);
        ?> 

<form method="post">
		<table class="center">
			<legend>Booking of Hotel Room</legend>
			<tr>
				<td><label>Room Type</label></td>
				<td>
                <select id="ddlselect" name="ddlselect" required>
                    <option value="" selected disabled>Select Room Type </option>
                    <?php
                    if (!empty($product_array)) {
                        foreach ($product_array as $key => $value) {
                    ?>
                    <option value="<?php echo $product_array[$key]["roomType"]; ?>"><?php echo $product_array[$key]["roomType"]; ?></option>
                    <?php }}?>
                </select>
			</tr>
            <tr>
				<td><label>Checkin Date</label></td>
				<td>
                    <div class="input-group date" id="datepicker">
                        <input type="text" class="form-control" id="date1" name="date3" required></input>
                            <div class="input-group-append">
                                <div class="input-group-text bg-white d-block">
                                    <i class="fa fa-calendar"></i>
                                </div>
                            </div>
                    </div>
                </td>
			</tr>
            <tr>
                <td><label>Checkout Date</label></td>
				<td>
                    <div class="input-group date" id="datepicker2">
                        <input type="text" class="form-control" id="date2" name="date4" required></input>
                            <div class="input-group-append">
                                <div class="input-group-text bg-white d-block">
                                    <i class="fa fa-calendar"></i>
                                </div>
                            </div>
                    </div>
                </td>
			</tr>
            <tr>   
                <td><label>Number of Day Stay:</label>
                    <h4 style="display: inline-block" id="ans">0 </h4>
                <td><label> days</label>
                </td>
            </tr>
            <tr>
            <td></td>

                <?php 
            if(isset($_SESSION['fullName'])){
?>
				<td><input id="Button" type="submit" value="Submit" name="submit" class="btn btn-primary submitbtn2"></td>
                <?php }else{
                    echo "<script type='text/javascript'>alert('Please login to perform this action.');</script>";
                    echo "<script> location.href = './login.php';</script>";
                }?>
			</tr>
		</table>		
	</form>

<?php include 'include_php/footer.php';?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>