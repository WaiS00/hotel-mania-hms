<?php 

  require_once 'SQL_login.php';

  if(isset($_POST['submit'])){

                $roomSelected = $_POST['roomSelected'];
                $address = $_POST['address'];
                $numguest = $_POST['numguest'];
                $ic = $_POST['ic'];
                $checkInDate = $_POST['date3'];
                $checkoutdate = $_POST['date4'];

                $tbl_name = 'roomdb';
                $tbl_name1 = 'customerdb';

                $query4 = "SELECT customerId FROM customerdb WHERE icNumber = $ic ";
                $result3 = $pdo->query($query4);
                $result3 = $result3->fetch(PDO::FETCH_ASSOC);
                
                $customerid = $result3['customerId'];

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
                SET customerId='$customerid', checkInDate='$checkInDate', checkOutDate='$checkoutdate', numofGuest='$numguest'
                WHERE roomNumber=$roomSelected";
                
                $query1 = "UPDATE $tbl_name1 
                SET roomNumber='$roomSelected', checkInDate='$checkInDate', checkOutDate='$checkoutdate', numberofGuest='$numguest'
                WHERE icNumber = '$ic'";

                $result = $pdo->query($query);
                $result1 = $pdo->query($query1);
                echo "<script type='text/javascript'>alert('Check-in successfully');</script>";
                echo "<script type='text/javascript'>window.location.href = './check-in.php';</script>";

            }else{
            }
    
    

?>
