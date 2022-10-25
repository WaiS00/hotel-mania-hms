<?php 

  require_once 'SQL_login.php';
  require_once "config.php"; 

  // get data from other databases to be used

  $query = "SELECT * FROM bookingcartdb b, roomtypedb c WHERE b.roomType= c.roomType";
  $product_array = $product_db->getRoomRate($query);

  $query4 = "SELECT r.roomImage FROM roomtypedb r, bookingcartdb b WHERE b.roomType = r.roomType";
  $result4 = $pdo->query($query4);
  $result4 = $result4->fetch(PDO::FETCH_ASSOC);

  $query5 = "SELECT userId FROM customerdb";
  $result5 = $pdo->query($query5);
  $result5 = $result5->fetch(PDO::FETCH_ASSOC);

  if($_POST['submit'] == 'Pay'){
    // if user clicked on pay button
    $tbl_name = 'bookingcartdb';
    $tbl_name2 = 'bookingdb';

    $query3 = "SELECT * FROM bookingcartdb";
    $result2 = $pdo->query($query3);
    $result3 = $result2->fetch(PDO::FETCH_ASSOC);
    
    $result  = $pdo->query($query);
    $row = $result->fetch();
    $ui  = $row['userid'];

    // get booking cart data to be checkout
    $customerid = $result3['customerid'];
    $checkInDate = $result3['checkInDate'];
    $checkOutDate = $result3['checkoutDate'];
    $dayDiff = $result3['dayDiff'];
    $roomType = $result3['roomType'];
    $dayDiff = $result3['dayDiff'];
    $roomImage = $result4['roomImage'];
    $userId = $result5['userId'];
    
    if (!empty($product_array)) {
        foreach ($product_array as $key => $value) {
          // get the total price which is room rate * with total days
          $totalPrice = ($product_array[$key]["roomRate"])*$dayDiff;
        }}
    
    $bookingTotalPrice = $totalPrice;
    $customerId = $result3['customerId'];
    $bookingcartId = $result3['bookingcartId'];

    // after payment success, store booking information into bookingdb 
    $query1 = "INSERT INTO $tbl_name2 (bookingId, checkInDate, checkOutDate, roomType, bookingTotalPrice, customerId, paymentStatus, bookingcartId, roomImage, dayDiff, userId) 
    VALUES(NULL, '$checkInDate', '$checkOutDate', '$roomType', '$totalPrice', '$customerId', 'paid', '$bookingcartId', '$roomImage', '$dayDiff', '$userId' )";
    
    $result = $pdo->query($query1);

    // delete from booking cart 
    $query2 = "DELETE FROM bookingcartdb";
    $result = $pdo->query($query2);
    
    // payment success message
    echo "<script type='text/javascript'>alert('Payment Has Been Completed Successfully');</script>";
    echo "<script type='text/javascript'>window.location.href = './booking_history.php';</script>";
}


if($_POST['submit'] == 'Cancel'){

    // if user clicked on cancel button
    // delete booking cart item
    $query1 = "DELETE FROM bookingcartdb";
    $result = $pdo->query($query1);

    // direct back to homepage
    echo "<script type='text/javascript'>window.location.href = './index.php';</script>";

}
    

?>
