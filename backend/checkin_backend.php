<?php 

  require_once 'SQL_login.php';

    if(isset($_POST['submit'])){

      $ic = $_POST['ic'];
      $roomSelected = $_POST['roomSelected'];
      $address = $_POST['address'];
      $numguest = $_POST['numguest'];
      $checkInDate = $_POST['date3'];
      $checkoutdate = $_POST['date4'];

      $tbl_name = 'roomdb';
      $tbl_name1 = 'customerdb';

      // get customer id on which checkin is on the which customer
      // so that the customer db and booking db can be updated according to the customer's ic number
      $query4 = "SELECT customerId FROM customerdb WHERE icNumber = $ic ";
      $result3 = $pdo->query($query4);
      $result3 = $result3->fetch(PDO::FETCH_ASSOC);
      
      $customerid = $result3['customerId'];

      // if theres no booking, you cant checkin
      // count the number of booking where the customer id = customer id that matches the ic number
      $sql = "SELECT count(*) AS counter FROM bookingdb WHERE customerId = ?";
      $stmt = $pdo->prepare($sql);
      $stmt->execute([$customerid]);
      $counts = $stmt->fetch();
      // if there exist booking, then execute
      if($counts['counter'] == 1){
        
          // get customer id based on the customer id that is fetched previously
          $query6 = "SELECT customerId FROM bookingdb WHERE customerId = $customerid";
          $result6 = $pdo->query($query4);
          $result6 = $result6->fetch(PDO::FETCH_ASSOC);
          
          $customerid1 = $result6['customerId']; 

          // set to non null to update values
          // null values cant be inserted with a preset values
          $query5 = "UPDATE $tbl_name 
          SET customerId=0, checkInDate='2022-10-22', checkOutDate='2022-10-23', numofGuest=0
          WHERE roomNumber=$roomSelected";

          $result4 = $pdo->query($query5);

          // set to non null to update values
          // null values cant be inserted with a preset values
          $query6 = "UPDATE $tbl_name1
          SET roomNumber=0, checkInDate='2022-10-22', checkOutDate='2022-10-23', numberofGuest=0
          WHERE icNumber = '$ic'";

          $result5 = $pdo->query($query6);

          // update values with new values and set room availability to unavailable
          $query = "UPDATE $tbl_name 
          SET customerId='$customerid', roomAvailability='unavailable', checkInDate='$checkInDate', checkOutDate='$checkoutdate', numofGuest='$numguest'
          WHERE roomNumber=$roomSelected";
          
          $query1 = "UPDATE $tbl_name1 
          SET roomNumber='$roomSelected', checkInDate='$checkInDate', checkOutDate='$checkoutdate', numberofGuest='$numguest'
          WHERE icNumber = '$ic'";

          $result = $pdo->query($query);
          $result1 = $pdo->query($query1);
          echo "<script type='text/javascript'>alert('Check-in successfully');</script>";
          echo "<script type='text/javascript'>window.location.href = './check-in.php';</script>";
      }          
      // when theres no booking from the database and cant be found
      echo "<script type='text/javascript'>alert('No booking has been found');</script>";
      echo "<script type='text/javascript'>window.location.href = './booking.php';</script>";





      }else{
      }  

?>
