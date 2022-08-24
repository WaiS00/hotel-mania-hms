<?php 

  require_once 'SQL_login.php';
  require_once "backend/config.php"; 

  $query = "SELECT * FROM bookingcartdb b, roomdb c WHERE b.roomType= c.roomType";
  $product_array = $product_db->getRoomRate($query);

  if(isset($_POST['submit'])){
                
    $tbl_name = 'bookingcartdb';
    $tbl_name2 = 'bookingdb';

    $query3 = "SELECT * FROM bookingcartdb";
    $result2 = $pdo->query($query3);
    $result3 = $result2->fetch(PDO::FETCH_ASSOC);
    
    $result  = $pdo->query($query);
    $row = $result->fetch();
    $ui  = $row['userid'];

    $customerid = $result3['customerid'];
    $checkInDate = $result3['checkInDate'];
    $checkOutDate = $result3['checkoutDate'];
    $roomType = $result3['roomType'];
    $dayDiff = $result3['dayDiff'];

    if (!empty($product_array)) {
        foreach ($product_array as $key => $value) {
          $totalPrice = ($product_array[$key]["roomRate"])*$dayDiff;
        }}
    
    $bookingTotalPrice = $totalPrice;
    $customerId = $result3['customerId'];
    $bookingcartId = $result3['bookingcartId'];

    $query1 = "INSERT INTO $tbl_name2 (bookingId, checkInDate, checkOutDate, roomType, bookingTotalPrice, customerId, paymentStatus, bookingcartId) 
    VALUES(NULL, '$checkInDate', '$checkOutDate', '$roomType', '$totalPrice', '$customerId', 'paid', '$bookingcartId' )";
    
    $result = $pdo->query($query1);
    echo "<script type='text/javascript'>window.location.href = './index.php';</script>";

}else{
}


    

?>
