<!DOCTYPE html>
<html lang="en">
<?php require_once "backend/config.php"; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/booking_history.css">
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
<h4>Booking History</h4>
<?php
        $query = "SELECT * FROM bookingdb";
        $product_array = $product_db->getBookingHistory($query);
        if (!empty($product_array)) {
            foreach ($product_array as $key => $value) {
        ?> 
<div class="card mb-3" style="max-width: 100em;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?php echo $product_array[$key]["roomImage"]; ?>" class="card-img-top" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $product_array[$key]["roomType"]; ?></h5>
        <p class="card-text">Check-in Date: <?php echo $product_array[$key]["checkInDate"]; ?></p>
        <p class="card-text">Check-out Date: <?php echo $product_array[$key]["checkOutDate"]; ?></p>
        <p class="card-text"><small class="text-muted"> <p class="card-text">Total Booking Price: <?php echo $product_array[$key]["bookingTotalPrice"]; ?></p></small></p>
        <p class="card-text"><small class="text-muted"> <p class="card-text">Payment Status: <?php echo $product_array[$key]["paymentStatus"]; ?></p></small></p>  
        <a href="backend/booking_history_backend.php?bookingId=<?php echo $product_array[$key]["bookingId"];?>" onClick="return confirm('Are you sure you want to delete?')"><i class="bi bi-trash"></i> Delete Booking</a>
      </div>
    </div>
  </div>
</div>
</form>
<?php }} ?>

<?php include 'include_php/footer.php';?>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>