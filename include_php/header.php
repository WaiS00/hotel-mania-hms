<?php session_start();?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg bg-light navbar-light py-3 fixed-top">
  <div class="container-fluid">
    <a href="index.php" class="navbar-brand">
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
    if($_SESSION['userType'] == "manager"){
        ?>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Account Management
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="create_account.php">Create Account</a></li>
                <li><a class="dropdown-item" href="worker_manager_list.php">View Worker/ Manager Accounts</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="rating_list.php">View Ratings</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Attendance Management
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="nav-link" href="attendance.php">Attendance</a></li>
                <li><a class="nav-link" href="attendance-list.php">View Attendance List</a></li>
              </ul>
            </li>
            <li class="nav-item">
            </li>
            <li class="nav-item">
              <a class="nav-link" href="timeslot.php">Timeslot</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Customer Services
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="check-in.php">Check-in (Customer)</a></li>
                <li><a class="dropdown-item" href="check-out.php">Check-out (Customer)</a></li>
                <li><a class="dropdown-item" href="room-availability.php">Room Availability</a></li>
                <li><a class="dropdown-item" href="booking.php">Book Now (Rooms)</a></li>
              </ul>
            </li>
          </ul>
        <?php
      }else if($_SESSION['userType'] == "worker"){
        ?>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="attendance.php">Attendance</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="timeslot.php">Timeslot</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Customer Services
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="check-in.php">Check-in (Customer)</a></li>
                <li><a class="dropdown-item" href="check-out.php">Check-out (Customer)</a></li>
                <li><a class="dropdown-item" href="room-availability.php">Room Availability</a></li>
                <li><a class="dropdown-item" href="booking.php">Book Now (Rooms)</a></li>
              </ul>
            </li>
          </ul>
        <?php
      }else{
        // else -> customer and guest
         ?>
        <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  About Us
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="about_us.php">Location</a></li>
                  <li><a class="dropdown-item" href="about_company.php">Our Company</a></li>
                </ul>
              </li>
        <li class="nav-item">
          <a class="nav-link" href="facilities.php">Facilities</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Rooms
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="room-normal.php">Normal Room</a></li>
            <li><a class="dropdown-item" href="room-deluxe.php">Deluxe Room</a></li>
            <li><a class="dropdown-item" href="room-executive.php">Executive Room</a></li>
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
      }
    ?>

    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <?php 
        // every user that has login shares this function (logout)
        if(isset($_SESSION['fullName']) && ($_SESSION['userId'])){
        ?>
                <li class="nav-item">
                    <a href="backend/session_logout.php" class="nav-link"><i class="bi bi-box-arrow-right logout"></i> Logout</a>
                </li>
                <?php 
                if($_SESSION['userType'] == "customer"){
                  // only customer can rate reviews
                  // after login in
                 ?>
                    <li class="nav-item">
                      <a class="nav-link" href="rating_main.php"><i class="bi bi-star"></i> Rate Now</a>
                    </li>
                  <?php
                }?>

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
  