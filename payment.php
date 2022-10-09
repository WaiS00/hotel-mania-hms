<?php session_start();?>
<?php require_once "backend/payment_backend.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/payment.css">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <title>Hotel Mania</title>
    <link rel="icon" href="resources/hm_logo.png"/>
</head>
<?php require_once "backend/config.php"; ?>
<?php include 'include_php/header.php';?>

<body>
<form method="post">
<div class="row">
  <div class="col-75">
  <form method="post">
    <div class="container1">
        <div class="row">
          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Name" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
            <div class="row">
              <div class="col-50">
                <label for="expmonth">Expiry (Valid Till)</label>
                <input type="text" id="expmonth" name="expmonth" placeholder="MM/YY" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352" required>
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <div class="row">
            <div class="col-50">
                <input type="submit" id="Button" name="submit" value="Pay" class="btn1" >
            </div>
            <div class="col-50">
                <input type="submit" id="Button" name="submit" value="Cancel" class="btn2 cancel" readonly>
            </div>
        </div>
    </div>
</form>
  </div>
  </form>

  <div class="col-25">
    <div class="container1">
      <h4>Cart
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
        </span>
      </h4>
      <?php
        $query = "SELECT * FROM bookingcartdb b, customerdb c  WHERE b.customerid=c.customerid";
        $product_array = $product_db->cartItem($query);
        if (!empty($product_array)) {
            foreach ($product_array as $key => $value) {
        ?> 
      <p><a>Room Type</a> <span class="spanclass roomType"><?php echo $product_array[$key]["roomType"]; ?></span></p>
      <p><a>Check in Date</a> <span class="spanclass checkInDate"><?php echo $product_array[$key]["checkInDate"]; ?></span></p>
      <p><a>Check out Date</a> <span class="spanclass checkoutDate"><?php echo $product_array[$key]["checkoutDate"]; ?></span></p>
      <p><a>Number of Day Stay</a> <span class="spanclass dayDiff"><?php echo $product_array[$key]["dayDiff"]; ?></span></p>      <hr>
      <?php }} ?>
      <?php
          $query = "SELECT * FROM bookingcartdb b, roomtypedb c WHERE b.roomType= c.roomType";
          $product_array = $product_db->getRoomRate($query);
          if (!empty($product_array)) {
              foreach ($product_array as $key => $value) {
        ?> 
      <p>Room Rate <span class="spanclass roomRate" style="color:black"><b><?php echo "RM". $product_array[$key]["roomRate"]; ?></b></span></p>
      <p>Total Price<span class="spanclass roomRate" style="color:black"><b><?php echo "RM". $product_array[$key]["roomRate"]. ' x '. $product_array[$key]["dayDiff"].'='. "RM". $product_array[$key]["roomRate"]*$product_array[$key]["dayDiff"]; ?></b></span></p>
      <?php }} ?>
    </div>
  </div>
</div>
<?php include 'include_php/footer.php';?>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>