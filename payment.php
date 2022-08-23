<?php session_start();?>
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
<?php require_once "backend/booking_backend.php"; ?>

<body>
<div class="row">
  <div class="col-75">
    <div class="container1">
      <form action="/action_page.php">

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
            <input type="text" id="cname" name="cardname" placeholder="Name">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <div class="row">
              <div class="col-50">
                <label for="expmonth">Expiry (Valid Till)</label>
                <input type="text" id="expmonth" name="expmonth" placeholder="MM/YY">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <div class="row">
            <div class="col-50">
                <input type="submit" value="Continue to checkout" class="btn1">
            </div>
            <div class="col-50">
                <input type="cancel" value="Cancel" class="btn2 cancel">
            </div>
        </div>
      </form>
    </div>
  </div>

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
      <p><a>Day Differences</a> <span class="spanclass dayDiff"><?php echo $product_array[$key]["dayDiff"]; ?></span></p>
      <hr>
      <?php }} ?>
      <?php
        if(isset($_SESSION['roomType'])){
          $query = "SELECT * FROM roomdb c, bookingcartdb b WHERE c.roomType=b.roomType";
          $product_array = $product_db->getRoomRate($query);
          if (!empty($product_array)) {
              foreach ($product_array as $key => $value) {
        ?> 
      <p>Total <span class="spanclass price" style="color:black"><b><?php echo $product_array[$key]["roomRate"]; ?></b></span></p>
      <?php }} }?>
    </div>
  </div>
</div>

<?php include 'include_php/footer.php';?>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>