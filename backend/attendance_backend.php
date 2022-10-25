<?php 

require_once 'SQL_login.php';
require_once "config.php"; 

// if user clicked on clock-in, 
    if($_POST['submit'] == 'Clock-in'){
        // if user id is found (if user has login)
        if(isset($_SESSION['userId'])){
            // get current date time
            $date = date('Y-m-d H:i:s');
            $tbl_name = 'attendancedb';

            // get user id
            $query3 = "SELECT * FROM userdb WHERE userId = '{$_SESSION['userId']}' ";
            $result2 = $pdo->query($query3);
            $result2 = $result2->fetch(PDO::FETCH_ASSOC);
            
            $fullName = $result2['fullName'];

            // insert into attendence database 
            $query1 = "INSERT INTO $tbl_name (attendanceId, attendanceDateTime, attendanceType, fullName) 
            VALUES(NULL, '$date', 'Clock-in', '$fullName')";
            
            $result = $pdo->query($query1);

            $query   = "SELECT * FROM attendancedb";
            $result  = $pdo->query($query);
            $row = $result->fetch();
            $dt  = $row['attendanceDateTime'];
            // set session for attendance date time
            session_start();
            $_SESSION['attendanceDateTime'] = $dt;
            
            // if session is set, user cant clock-in or clockout, button will be disabled in attendance.php
            if(isset($_SESSION['attendanceDateTime'])){

            //display success message
            echo "<script type='text/javascript'>alert('Clock-in Successfully.');</script>";
            echo "<script type='text/javascript'>window.location.href = './attendance.php';</script>";
            }
        }
        // when userid session is not found
        echo "<script type='text/javascript'>alert('Please login or register your account.');</script>";
        echo "<script> location.href = './login.php';</script>";
    }



    // same as clock-in but its clock-out variables
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