<!DOCTYPE html>
<html lang="en">
<?php require_once "backend/config.php"; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/room.css">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <title>Hotel Mania</title>
    <link rel="icon" href="resources/hm_logo.png"/>
</head>

<?php include 'include_php/header.php';?>

<body>

<?php
        $query = "SELECT * FROM roomtypedb WHERE roomType='Executive'";
        $product_array = $product_db->getExecutive($query);
        if (!empty($product_array)) {
            foreach ($product_array as $key => $value) {
        ?> 

<div id="carouselExampleSlidesOnly" class="carousel slide firstcard" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
</div>
  <div class="carousel-inner crl">
    <div class="carousel-item active">
      <img src="<?php echo $product_array[$key]["roomImage"]; ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3><?php echo $product_array[$key]["roomType"] . " Room"; ?></h3>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3 shadow-lg p-3 mb-5 bg-white rounded">
    <div class="row g-0 row-center row1">
        <div class="col-md-4">
            <img src="<?php echo $product_array[$key]["roomImage"]; ?>" class="img-fluid rounded-start dslr-image" alt="...">
        </div>
        <div class="col-md-2">
        </div>
        <div class="col-md-6 justify-content-center align-self-center">
            <div class="card-body">
                <div class="dslr-description">
                    <h2 class="card-title"><?php echo $product_array[$key]["roomType"] . " Room"; ?></h2><br>
                    <p class="card-text text-description"><?php echo $product_array[$key]["roomDetails"]; ?></p>
                    <p><b><?php echo  "RM".$product_array[$key]["roomRate"] . "++/ Per Night" ; ?> </b></p>
                    <input type="submit" value="Book Now!" onclick="location.href='booking.php'" class="btn btn-primary submitbtn2">
                </div>
            </div>
        </div>
    </div>
</div>
<?php
            }
        }
?>

<?php include 'include_php/footer.php';?>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>