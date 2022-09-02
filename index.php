<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <title>Hotel Mania</title>
    <link rel="icon" href="resources/hm_logo.png"/>
</head>

<body>

<?php include 'include_php/header.php';?>

<body>
    <section id="carousel-picture">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="resources/hm_homepage1.png" class="d-block w-100 carouselimg" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5> Hotel Mania</h5>
                    <p> “The Most Cheap-pluck HMS Award”</p>
                </div>
            </div>
        <div class="carousel-item">
            <img src="resources/hm_homepage2.png" class="d-block w-100 carouselimg" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5> Hotel Mania</h5>
                    <p> “The Most Cheap-pluck HMS Award”</p>
                </div>
        </div>
        <div class="carousel-item">
            <img src="resources/facilities-swimming.png" class="d-block w-100 carouselimg" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5> Hotel Mania</h5>
                    <p> “The Most Cheap-pluck HMS Award”</p>
                </div>
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </section>

    <section id="new-release">
    <div class="container new">
        <i href="facilities.php" class="bi bi-newspaper new-release-cam"> New Facilities !</i>
    <i href="facilities.php" class="bi bi-newspaper new-release-cam"><?php echo $_SESSION['userType']?></i>
    </div>
        <div class="card mb-3 shadow-lg p-3 mb-5 bg-white rounded">
        <div class="row g-0 row-center">
            <div class="col-md-4">
            <img src="resources/facilities-swimming3.png" class="img-fluid rounded-start dslr-image" alt="...">
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-6 justify-content-center align-self-center">
            <div class="card-body">
                <div class="dslr-description ">
                    <h2 class="card-title">Olympic-Size Swimming Pool </h2>
                    <p class="card-text text-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <p class="card-text"><small class="text-muted">While stock last hehe</small></p>
                    <?php if($_SESSION['userType'] != 'worker'){
                        ?>
                    <a href="facilities.php" class="btn view-btn" role="button" style="color:white;">Click here to view more!</a>
                    <?php 
                        }else{
                    ?>
                        <p>Logout or Login to customer account to view more</p>
                        <?php }?>
                        
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>


<?php include 'include_php/footer.php';?>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>