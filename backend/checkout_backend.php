<?php 

  require_once 'SQL_login.php';
  
  if(isset($_POST['submit'])){

            $ic = $_POST['ic'];
            $roomSelected = $_POST['roomSelected'];

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

                $query = "UPDATE $tbl_name 
                SET customerId=NULL, roomAvailability='Available', checkInDate=NULL, checkOutDate=NULL, numofGuest=NULL
                WHERE roomNumber=$roomSelected";

                $query1 = "UPDATE $tbl_name1 
                SET roomNumber=NULL, checkInDate=NULL, checkOutDate=NULL, numberofGuest=NULL
                WHERE icNumber = '$ic'";
          
                $result = $pdo->query($query);
                $result1 = $pdo->query($query1);
                echo "<script type='text/javascript'>alert('Check-out Successfully');</script>";
                echo "<script type='text/javascript'>window.location.href = './booking-list.php';</script>";
            }          
            echo "<script type='text/javascript'>alert('Room check-in has not been found');</script>";
            echo "<script type='text/javascript'>window.location.href = './room-availability.php';</script>";

            }else{
            }
    
    

?>
