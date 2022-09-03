<?php session_start();?>
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
<h4>Ratings and Review</h4>
<?php
        require_once 'backend/SQL_login.php';
        $query = "SELECT * FROM ratingdb";
        $product_array = $product_db->getRating($query);
        if (!empty($product_array)) {
            foreach ($product_array as $key => $value) {
        ?> 
<div class="card mb-3" style="max-width: 100em;">
    <div class="row g-0">
        <div class="card-body">
        <h5 class="card-title"><?php echo "Email: ".$product_array[$key]["email"]; ?></h5>
        <p class="card-text">Rating: <?php echo $product_array[$key]["rate"]. "/5"; ?></p>
        <p class="card-text">Review: <?php echo $product_array[$key]["review"]; ?></p>
        </div>
    </div>
  </div>
</div>

<?php } } else {
    echo "<script type='text/javascript'>alert('Please login or register your account.');</script>";
    echo "<script> location.href = './login.php';</script>";
}?>

<?php include 'include_php/footer.php';?>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>

  </body>

</html>