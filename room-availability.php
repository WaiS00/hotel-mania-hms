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

<div class="plane">

  <div class="exit exit--front fuselage">
  </div>
  <ol class="cabin fuselage">
    <li class="row row--1">
      <ol class="seats" type="A">
            <?php
            $query = "SELECT * FROM roomdb";
            $product_array = $product_db->getRoom($query);
            if (!empty($product_array)) {
                foreach ($product_array as $key => $value) {
                    if ($product_array[$key]["roomId"] <= 5) {
            ?> 
                <li class="seat">
                    <input type="checkbox" id="<?php echo $product_array[$key]["roomId"]; ?>"/>
                    <label for="<?php echo $product_array[$key]["roomId"]; ?>"><?php echo $product_array[$key]["roomNumber"]; ?></label>
                </li>
            <?php
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
            ?> 
                <li class="seat">
                <input type="checkbox" id="<?php echo $product_array[$key]["roomId"]; ?>"/>
                <label for="<?php echo $product_array[$key]["roomId"]; ?>"><?php echo $product_array[$key]["roomNumber"]; ?></label>
                </li>
            <?php
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
            ?> 
                <li class="seat">
                <input type="checkbox" id="<?php echo $product_array[$key]["roomId"]; ?>"/>
                <label for="<?php echo $product_array[$key]["roomId"]; ?>"><?php echo $product_array[$key]["roomNumber"]; ?></label>
                </li>
            <?php
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
            ?> 
                <li class="seat">
                <input type="checkbox" id="<?php echo $product_array[$key]["roomId"]; ?>"/>
                <label for="<?php echo $product_array[$key]["roomId"]; ?>"><?php echo $product_array[$key]["roomNumber"]; ?></label>
                </li>
            <?php
                }
            }
        }
            ?>
      </ol>
    </li>
  </ol>
  <div class="exit exit--front fuselage">
    </div>
  </div>

<?php include 'include_php/footer.php';?>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>