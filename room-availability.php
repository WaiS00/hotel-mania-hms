<?php require_once 'backend/availability_backend.php';?>
<?php require_once "backend/config.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/availability.css">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <title>Hotel Mania</title>
    <link rel="icon" href="resources/hm_logo.png"/>
</head>

<?php include 'include_php/header.php';?>

<body>
<h4>Room Availability</h4>

<form method="post">
<div class="plane">
  <div class="exit exit--front fuselage">
  </div>
  <ol class="cabin fuselage">
    <div class="room12">
    <li class="row row--1">
      <ol class="seats" type="A">
            <?php
            $query = "SELECT * FROM roomdb";
            $product_array = $product_db->getRoom($query);
            if (!empty($product_array)) {
                foreach ($product_array as $key => $value) {
                    if ($product_array[$key]["roomId"] <= 5) {
                        if($product_array[$key]["roomAvailability"] == "available"){
                            ?> 
                                <li class="seat">
                                    <input type="checkbox" class="checkoption" value="<?php echo $product_array[$key]["roomNumber"]; ?>"id="<?php echo $product_array[$key]["roomNumber"]; ?>"/>
                                    <label for="<?php echo $product_array[$key]["roomId"]; ?>"><?php echo $product_array[$key]["roomType"]; ?> Room<br><?php echo $product_array[$key]["roomNumber"]; ?></label>
                                </li>
                            <?php
                                }else{
                            ?>
                                <li class="seat">
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
      <ol class="seats" type="B">
            <?php
            $query = "SELECT * FROM roomdb";
            $product_array = $product_db->getRoom($query);
            if (!empty($product_array)) {
                foreach ($product_array as $key => $value) {
                    if ($product_array[$key]["roomId"] >=6 &&  $product_array[$key]["roomId"] <= 10 ) {
                        if($product_array[$key]["roomAvailability"] == "available"){
                            ?> 
                                <li class="seat">
                                    <input type="checkbox" class="checkoption" value="<?php echo $product_array[$key]["roomNumber"]; ?>"id="<?php echo $product_array[$key]["roomNumber"]; ?>"/>
                                    <label for="<?php echo $product_array[$key]["roomId"]; ?>"><?php echo $product_array[$key]["roomType"]; ?> Room<br><?php echo $product_array[$key]["roomNumber"]; ?></label>
                                </li>
                            <?php
                                }else{
                            ?>
                                <li class="seat">
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
      <ol class="seats" type="C">
            <?php
            $query = "SELECT * FROM roomdb";
            $product_array = $product_db->getRoom($query);
            if (!empty($product_array)) {
                foreach ($product_array as $key => $value) {
                    if ($product_array[$key]["roomId"] >= 11 &&  $product_array[$key]["roomId"] <= 15 ) {
                        if($product_array[$key]["roomAvailability"] == "available"){
            ?> 
                <li class="seat">
                    <input type="checkbox" class="checkoption" value="<?php echo $product_array[$key]["roomNumber"]; ?>"id="<?php echo $product_array[$key]["roomNumber"]; ?>"/>
                    <label for="<?php echo $product_array[$key]["roomId"]; ?>"><?php echo $product_array[$key]["roomType"]; ?> Room<br><?php echo $product_array[$key]["roomNumber"]; ?></label>
                </li>
            <?php
                }else{
            ?>
                <li class="seat">
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
      <ol class="seats" type="D">
            <?php
            $query = "SELECT * FROM roomdb";
            $product_array = $product_db->getRoom($query);
            if (!empty($product_array)) {
                foreach ($product_array as $key => $value) {
                    if ($product_array[$key]["roomId"] >= 16 &&  $product_array[$key]["roomId"] <= 20 ) {
                        if($product_array[$key]["roomAvailability"] == "available"){
                            ?> 
                                <li class="seat">
                                    <input type="checkbox" class="checkoption" value="<?php echo $product_array[$key]["roomNumber"]; ?>" id="<?php echo $product_array[$key]["roomNumber"]; ?>"/>
                                    <label for="<?php echo $product_array[$key]["roomId"]; ?>"><?php echo $product_array[$key]["roomType"]; ?> Room<br><?php echo $product_array[$key]["roomNumber"]; ?></label>
                                </li>
                            <?php
                                }else{
                            ?>
                                <li class="seat">
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
    </div>
  </ol>
  <div class="exit exit--front fuselage">
    </div>
<br>

    <table class="center">
			<tr>
				<td><label>Room Type</label></td>
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
				<td><label>IC/Passport Number</label></td>
				<td><input type="text" name= "ic_num" class="form-control" required  />
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
				<td></td>
				<td><input type="submit" value="Submit" class="btn btn-primary submitbtn"></td>
			</tr>
		</table>

  </div>


<?php include 'include_php/footer.php';?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script type="text/javascript">
   $(document).ready(function(){

      $('.checkoption').click(function() {
         $('.checkoption').not(this).prop('checked', false);
      });

   });
   </script>
    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>