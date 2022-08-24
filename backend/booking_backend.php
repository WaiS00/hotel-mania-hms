<?php 

  require_once 'SQL_login.php';
  
  if(isset($_POST['submit'])){
    if(isset($_SESSION['userId'])){

            $select = $_POST['ddlselect'];
            $checkInDate = $_POST['date3'];
            $checkoutdate = $_POST['date4'];
            $tbl_name = 'bookingcartdb';

            $dayDiff = abs(strtotime($checkoutdate) - strtotime($checkInDate));
            $years = floor($dayDiff / (365*60*60*24));
            $months = floor(($dayDiff - $years * 365*60*60*24) / (30*60*60*24));
            $days = floor(($dayDiff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

                $query3 = "SELECT customerid FROM customerdb WHERE userId = '{$_SESSION['userId']}' ";
                $result2 = $pdo->query($query3);
                $result2 = $result2->fetch(PDO::FETCH_ASSOC);
                
                $customerid = $result2['customerid'];

                $query = "INSERT INTO $tbl_name (bookingcartId, roomType, checkInDate, checkoutDate, dayDiff, customerid) 
                VALUES(NULL,'$select', '$checkInDate', '$checkoutdate', '$days', $customerid)";
                
                $result = $pdo->query($query);
                echo "<script type='text/javascript'>window.location.href = './payment.php';</script>";

            }else{
                echo "<script type='text/javascript'>alert('Please login or register your account.');</script>";
                echo "<script> location.href = './login.php';</script>";
            }
    }
    

?>
