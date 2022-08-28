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
    <link rel="stylesheet" href="  https://printjs-4de6.kxcdn.com/print.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <title>Hotel Mania</title>
    <link rel="icon" href="resources/hm_logo.png"/>
</head>

<?php include 'include_php/header.php';?>

<body>
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
        <a class="btn btn-primary" href="backend/booking_history_backend.php?bookingId=<?php echo $product_array[$key]["bookingId"];?>" onClick="return confirm('Are you sure you want to delete?')"><i class="bi bi-trash"></i> Delete Booking</a>
        <button type="button" class="btn btn-primary" onclick="printJS('printJS-form', 'html')">Generate Receipt</button>
      </div>

      <form method="post" action="#" id="printJS-form">
        <div class="receipt">
            <h1 style="text-align:center;">INVOICE</h1>
            <h3 style="text-align:center;">Booking Receipt</h3>
            <h4 style="text-align:center;">Hotel Mania</h4>
            <p style="text-align:right;">2 Jalan Punchak, Off,<br> Jalan P. Ramlee,<br>50250 Kuala Lumpur</p>
            <p style="text-align:center;"> This is an automated generation of receipt for the current booking <br> Please find below a complete version of the receipt for the hotel room booking.<br> Please do not hesitate to contact me with any questions.<br>
            <br>Many thanks,
            <br>Wai Siong <br></p>
            <?php
              $query = "SELECT * FROM bookingdb";
              $product_array = $product_db->getBookingHistory($query);
              if (!empty($product_array)) {
                  foreach ($product_array as $key => $value) {
              ?> 
            <h4 style="text-align:left;">Booking: <?php echo $key+1?></h4>
            <table style="margin-left: auto; margin-right: auto; border: 1px solid;border-collapse: collapse; width: 100%;">
              <tr>
                <td style="border: 1px solid;">Room Type: </td>
                <td style="border: 1px solid;"> <?php echo $product_array[$key]["roomType"]; ?></td>
              </tr>              
              <tr>
                <td style="border: 1px solid;">Check-in Date: </td>
                <td style="border: 1px solid;"> <?php echo $product_array[$key]["checkInDate"]; ?></td>
              </tr>
              <tr>
                <td style="border: 1px solid;">Check-out Date: </td>
                <td style="border: 1px solid;"> <?php echo $product_array[$key]["checkOutDate"]; ?></td>
              </tr>
              <tr>
                <td style="border: 1px solid;">Total Booking Price: </td>
                <td style="border: 1px solid;"> <?php echo $product_array[$key]["bookingTotalPrice"]; ?></td>
              </tr>
              <tr>
                <td style="border: 1px solid;">Payment Status: </td>
                <td style="border: 1px solid;"> <?php echo $product_array[$key]["paymentStatus"]; ?></td>
              </tr>
            </table>
            <br><br>

            <?php }}?>
            <br><br>
            <p style="text-align:center;"> Hope to see you on your visit!</p>
        </div>
        </form>
    </div>
  </div>
</div>

<?php }} ?>

<?php include 'include_php/footer.php';?>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>

  </body>

</html>