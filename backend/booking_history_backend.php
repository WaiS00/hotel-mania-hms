<?php

require_once 'SQL_login.php';

    $bookingId = $_GET['bookingId'];

    $query1 = "DELETE FROM bookingdb WHERE bookingId = $bookingId";
    $result = $pdo->query($query1);

    echo "<script type='text/javascript'>alert('Booking has been successfully deleted.');</script>";
    echo "<script type='text/javascript'>window.location.href = '../booking_history.php';</script>";

?>