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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <title>Hotel Mania</title>
    <link rel="icon" href="resources/hm_logo.png"/>
</head>

<?php include 'include_php/header.php';?>

<body>
<h4>Room Availability</h4>

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

<table style="margin-left: auto; margin-right: auto; border: 1px solid;border-collapse: collapse; width: 70%;">
        <tr>
            <td style="border: 1px solid;text-align: center;"><b> Check-in Date <b> </td>
            <td style="border: 1px solid;text-align: center;"><b> Check Out Date <b> </td>
            <td style="border: 1px solid;text-align: center;"><b> Number of Guest<b> </td>
            <td style="border: 1px solid;text-align: center;"><b> Room Number<b> </td>
        </tr>
        <tr>
        <?php 
            $query = "SELECT * FROM roomdb WHERE roomAvailability='unavailable'";
            $product_array = $product_db->getRoomAvailability($query);
            if (!empty($product_array)) {
                foreach ($product_array as $key => $value) {
        ?>
            <td style="border: 1px solid;text-align: center;"><?php echo $product_array[$key]["checkInDate"]; ?> </td>
            <td style="border: 1px solid;text-align: center;"><?php echo $product_array[$key]["checkOutDate"]; ?> </td>
            <td style="border: 1px solid;text-align: center;"><?php echo $product_array[$key]["numofGuest"]; ?> </td>
            <td style="border: 1px solid;text-align: center;"><?php echo $product_array[$key]["roomNumber"]; ?> </td>
        </tr>
        <?php }} ?>
    </table>

</div>

</form>

<?php include 'include_php/footer.php';?>
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