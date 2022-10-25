<?php 

  require_once 'SQL_login.php';
  
  if(isset($_POST['submit'])){

            // get only IC and room number in order to get information from other databases on the booking checkin
            $ic = $_POST['ic'];
            $roomSelected = $_POST['roomSelected'];

            $tbl_name = 'roomdb';
            $tbl_name1 = 'customerdb';
            
            // select custoemr id from ic
            $query4 = "SELECT customerId FROM customerdb WHERE icNumber = $ic ";
            $result3 = $pdo->query($query4);
            $result3 = $result3->fetch(PDO::FETCH_ASSOC);
            
            $customerid = $result3['customerId'];
      
            // if theres no booking, you cant checkout
            // count the number of booking where the customer id = customer id that matches the ic number
            $sql = "SELECT count(*) AS counter FROM bookingdb WHERE customerId = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$customerid]);
            $counts = $stmt->fetch();
            if($counts['counter'] == 1){

                // set all variables that are related to checkin into NULL values, 
                // and set room availability to available for the next customer to checkin
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
            // when theres no booking from the database and cant be found
            echo "<script type='text/javascript'>alert('Room check-in has not been found');</script>";
            echo "<script type='text/javascript'>window.location.href = './room-availability.php';</script>";

            }else{
            }
    
    

?>
