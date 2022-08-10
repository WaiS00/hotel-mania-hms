<?php session_start();?>
<link rel="stylesheet" href="/css/homepage.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg bg-light navbar-light py-3 fixed-top">
  <div class="container-fluid">
    <a href="homepage.php" class="navbar-brand">
      <img src="resources/hm_logo.png" alt="logo" width="100" height="auto" class="d-inline-block align-text-top">
    </a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navmenu"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navmenu">
  
  <?php 
      if($_SESSION['type'] != 'admin'){
        // is user not admin, then it's customer 
        // display cart for user to add in products
  ?>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="main/about_us.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="main/facilities.php">Facilities</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Rooms
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
          <li><a class="dropdown-item" href="room-executive.php">Executive Room</a></li>
          <li><a class="dropdown-item" href="room-normal.php">Normal Room</a></li>
          <li><a class="dropdown-item" href="room-couple.php">Couple Room</a></li>
          <li><a class="dropdown-item" href="room-list.php">View All Room</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="booking.php">Book Now</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="booking_history.php">Room Booked</a>
      </li>
    </ul>
    <?php 
      } else {
        // there's only two user - admin and customer
        // if not customer then it's admin, so display the admin function
        ?>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="admin_home.php">Add Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add_services.php">Add Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin_product_list.php">View Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin_service_list.php">View Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add_admin.php">Add Admin</a>
            </li>
          </ul>
        <?php
      }
    ?>

    <ul class="navbar-nav ms-auto">
      
      <?php 
      if($_SESSION['type'] != 'admin'){
        // is user not admin, then it's customer 
        // display cart for user to add in products
      ?>
      <li class="nav-item">
        <a href="cart_main.php" class="nav-link"><i class="bi bi-cart"></i> Cart</a>
      </li>
      <?php
      }else{
      }
      ?>

      <li class="nav-item">
        <?php 
        // every user that has login shares this function (logout)
        if(isset($_SESSION['name'])){
        ?>
                <li class="nav-item">
                    <a href="session_logout.php" class="nav-link"><i class="bi bi-box-arrow-right logout"></i> Logout</a>
                </li>
        <?php 
            } else {
              // if the user havent login, display link for them to sign up
        ?>
                <li class="hvr-float-shadow">
                    <a href="register.php" class="nav-link"><span class="link-text">Sign Up</span></a>
                </li>
                <li class="hvr-float-shadow">
                    <a href="login.php" class="nav-link"><span class="link-text">Log In</span></a>
                </li>
        <?php 
            }
        ?>
      </li>
    </ul>
  </div>


  </nav>
  