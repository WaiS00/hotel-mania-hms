<?php 

require_once 'SQL_login.php';
require_once "config.php"; 

    if($_POST['submit'] == 'Clock-in'){
        if(isset($_SESSION['userId'])){
            $date = date('Y-m-d H:i:s');
            $tbl_name = 'attendancedb';

            $query3 = "SELECT * FROM userdb WHERE userId = '{$_SESSION['userId']}' ";
            $result2 = $pdo->query($query3);
            $result2 = $result2->fetch(PDO::FETCH_ASSOC);
            
            $fullName = $result2['fullName'];

            $query1 = "INSERT INTO $tbl_name (attendanceId, attendanceDateTime, attendanceType, fullName) 
            VALUES(NULL, '$date', 'Clock-in', '$fullName')";
            
            $result = $pdo->query($query1);
            echo "<script type='text/javascript'>alert('Clock-in Successfully.');</script>";
            echo "<script type='text/javascript'>window.location.href = './attendance.php';</script>";
        }
        echo "<script type='text/javascript'>alert('Please login or register your account.');</script>";
        echo "<script> location.href = './login.php';</script>";
    }

    
    if($_POST['submit'] == 'Clock-out'){
        if(isset($_SESSION['userId'])){
            $date = date('Y-m-d H:i:s');
            $tbl_name = 'attendancedb';

            $query3 = "SELECT * FROM userdb WHERE userId = '{$_SESSION['userId']}' ";
            $result2 = $pdo->query($query3);
            $result2 = $result2->fetch(PDO::FETCH_ASSOC);
            
            $fullName = $result2['fullName'];

            $query1 = "INSERT INTO $tbl_name (attendanceId, attendanceDateTime, attendanceType, fullName) 
            VALUES(NULL, '$date', 'Clock-out', '$fullName')";
            
            $result = $pdo->query($query1);
            echo "<script type='text/javascript'>alert('Clock-out Successfully.');</script>";
            echo "<script type='text/javascript'>window.location.href = './attendance.php';</script>";
        }
        echo "<script type='text/javascript'>alert('Please login or register your account.');</script>";
        echo "<script> location.href = './login.php';</script>";
    }

?>