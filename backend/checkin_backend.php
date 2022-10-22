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

      $query4 = "SELECT customerId FROM customerdb WHERE icNumber = $ic ";
      $result3 = $pdo->query($query4);
      $result3 = $result3->fetch(PDO::FETCH_ASSOC);
      
      $customerid = $result3['customerId'];

      $sql = "SELECT count(*) AS counter FROM bookingdb WHERE customerId = ?";
      $stmt = $pdo->prepare($sql);
      $stmt->execute([$customerid]);
      $counts = $stmt->fetch();
      if($counts['counter'] == 1){
        
          // if theres no booking, you cant checkin
          $query6 = "SELECT customerId FROM bookingdb WHERE customerId = $customerid";
          $result6 = $pdo->query($query4);
          $result6 = $result6->fetch(PDO::FETCH_ASSOC);
          
          $customerid1 = $result6['customerId']; 

          // set to non null to update values
          $query5 = "UPDATE $tbl_name 
          SET customerId=0, checkInDate='2022-10-22', checkOutDate='2022-10-23', numofGuest=0
          WHERE roomNumber=$roomSelected";

          $result4 = $pdo->query($query5);

          $query6 = "UPDATE $tbl_name1
          SET roomNumber=0, checkInDate='2022-10-22', checkOutDate='2022-10-23', numberofGuest=0
          WHERE icNumber = '$ic'";

          $result5 = $pdo->query($query6);

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
      echo "<script type='text/javascript'>alert('No booking has been found');</script>";





      }else{
      }  

?>
