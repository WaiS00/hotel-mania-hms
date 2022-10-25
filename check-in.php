<?php session_start();?>
<?php require_once 'backend/checkin_backend.php';?>
<?php require_once "backend/config.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/checkin.css">
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
    <script type="text/javascript" src="js/check-in.js"> </script>
    <title>Hotel Mania</title>
    <link rel="icon" href="resources/hm_logo.png"/>
</head>

<?php include 'include_php/header.php';?>

<body>
<h4>Check-in</h4>

<form method="post">
<div class="level">
  <div class="exit exit--front hall">
  </div>
  <ol class="hall">
    <li class="row row--1">
      <ol class="rooms" type="A">
            <?php
            $query = "SELECT * FROM roomdb";
            $product_array = $product_db->getRoom($query);
            if (!empty($product_array)) {
                foreach ($product_array as $key => $value) {
                    if ($product_array[$key]["roomId"] <= 5) {
                        if($product_array[$key]["roomAvailability"] == "available"){
                            ?> 
                                <li class="room">
                                    <input type="checkbox" class="checkoption" value="<?php echo $product_array[$key]["roomNumber"]; ?>"id="<?php echo $product_array[$key]["roomNumber"]; ?>"/>
                                    <label for="<?php echo $product_array[$key]["roomId"]; ?>"><?php echo $product_array[$key]["roomType"]; ?> Room<br><?php echo $product_array[$key]["roomNumber"]; ?></label>
                                </li>
                            <?php
                                }else{
                            ?>
                                <li class="room">
                                    <input type="checkbox" class="checkoption" value="<?php echo $product_array[$key]["roomNumber"]; ?>"disabled id="<?php echo $product_array[$key]["roomNumber"]; ?>"/>
                                    <label for="<?php echo $product_array[$key]["roomId"]; ?>"><?php echo $product_array[$key]["roomType"]; ?> Room<br><?php echo $product_array[$key]["roomNumber"]; ?></label>
                                </li>
                
                            <?php 
                                }
                            }
                            }
                        }
                            ?>
      </ol>
    </li>
    <li class="row row--2">
      <ol class="rooms" type="B">
            <?php
            $query = "SELECT * FROM roomdb";
            $product_array = $product_db->getRoom($query);
            if (!empty($product_array)) {
                foreach ($product_array as $key => $value) {
                    if ($product_array[$key]["roomId"] >=6 &&  $product_array[$key]["roomId"] <= 10 ) {
                        if($product_array[$key]["roomAvailability"] == "available"){
                            ?> 
                                <li class="room">
                                    <input type="checkbox" class="checkoption" value="<?php echo $product_array[$key]["roomNumber"]; ?>"id="<?php echo $product_array[$key]["roomNumber"]; ?>"/>
                                    <label for="<?php echo $product_array[$key]["roomId"]; ?>"><?php echo $product_array[$key]["roomType"]; ?> Room<br><?php echo $product_array[$key]["roomNumber"]; ?></label>
                                </li>
                            <?php
                                }else{
                            ?>
                                <li class="room">
                                    <input type="checkbox" class="checkoption" value="<?php echo $product_array[$key]["roomNumber"]; ?>"disabled id="<?php echo $product_array[$key]["roomNumber"]; ?>"/>
                                    <label for="<?php echo $product_array[$key]["roomId"]; ?>"><?php echo $product_array[$key]["roomType"]; ?> Room<br><?php echo $product_array[$key]["roomNumber"]; ?></label>
                                </li>
                
                            <?php 
                                }
                            }
                            }
                        }
                            ?>
      </ol>
    </li>
    <li class="row row--3">
      <ol class="rooms" type="C">
            <?php
            $query = "SELECT * FROM roomdb";
            $product_array = $product_db->getRoom($query);
            if (!empty($product_array)) {
                foreach ($product_array as $key => $value) {
                    if ($product_array[$key]["roomId"] >= 11 &&  $product_array[$key]["roomId"] <= 15 ) {
                        if($product_array[$key]["roomAvailability"] == "available"){
            ?> 
                <li class="room">
                    <input type="checkbox" class="checkoption" value="<?php echo $product_array[$key]["roomNumber"]; ?>"id="<?php echo $product_array[$key]["roomNumber"]; ?>"/>
                    <label for="<?php echo $product_array[$key]["roomId"]; ?>"><?php echo $product_array[$key]["roomType"]; ?> Room<br><?php echo $product_array[$key]["roomNumber"]; ?></label>
                </li>
            <?php
                }else{
            ?>
                <li class="room">
                    <input type="checkbox" class="checkoption" value="<?php echo $product_array[$key]["roomNumber"]; ?>"disabled id="<?php echo $product_array[$key]["roomNumber"]; ?>"/>
                    <label for="<?php echo $product_array[$key]["roomId"]; ?>"><?php echo $product_array[$key]["roomType"]; ?> Room<br><?php echo $product_array[$key]["roomNumber"]; ?></label>
                </li>

            <?php 
                }
            }
            }
        }
            ?>
      </ol>
    </li>
    <li class="row row--4">
      <ol class="rooms" type="D">
            <?php
            $query = "SELECT * FROM roomdb";
            $product_array = $product_db->getRoom($query);
            if (!empty($product_array)) {
                foreach ($product_array as $key => $value) {
                    if ($product_array[$key]["roomId"] >= 16 &&  $product_array[$key]["roomId"] <= 20 ) {
                        if($product_array[$key]["roomAvailability"] == "available"){
                            ?> 
                                <li class="room">
                                    <input type="checkbox" class="checkoption" value="<?php echo $product_array[$key]["roomNumber"]; ?>" id="<?php echo $product_array[$key]["roomNumber"]; ?>"/>
                                    <label for="<?php echo $product_array[$key]["roomId"]; ?>"><?php echo $product_array[$key]["roomType"]; ?> Room<br><?php echo $product_array[$key]["roomNumber"]; ?></label>
                                </li>
                            <?php
                                }else{
                            ?>
                                <li class="room">
                                    <input type="checkbox" class="checkoption" value="<?php echo $product_array[$key]["roomNumber"]; ?>"disabled id="<?php echo $product_array[$key]["roomNumber"]; ?>"/>
                                    <label for="<?php echo $product_array[$key]["roomId"]; ?>"><?php echo $product_array[$key]["roomType"]; ?> Room<br><?php echo $product_array[$key]["roomNumber"]; ?></label>
                                </li>
                
                            <?php 
                                   }   }
            }
        }
            ?>
      </ol>
    </li>
    </ol>
    <div class="exit exit--front hall">
    </div>
    </div>

<br>
</div>

    <table class="center">
			<tr>
				<td><label>Address</label></td>
				<td><input type="text" name="address" class="form-control" required />
			</tr>
			<tr>
				<td><label>Number of Guest</label></td>
				<td><input type="text" name="numguest" class="form-control" required />
			</tr>
            <tr>
				<td><label>IC Number</label></td>
				<td><input type="text" name="ic" class="form-control" required />
			</tr>
            <tr>
				<td><label>Checkin Date</label></td>
				<td>
                    <div class="input-group date" id="datepicker">
                        <input type="text" class="form-control" id="date1" name="date3" required value="<?php echo date("Y-m-d");?>"></input>
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
                <td><input id="Button" type="submit" value="Submit" name="submit" class="btn btn-primary submitbtn"></td>
			</tr>
		</table>

</form>

<?php include 'include_php/footer.php';?>
 <!-- Bootstrap JS CDN -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>