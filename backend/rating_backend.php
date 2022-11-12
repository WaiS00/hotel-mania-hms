<?php 

  require_once 'SQL_login.php';
  if(isset($_POST['submit'])){
    if(isset($_SESSION['userId'])){

            $rate = $_POST['rate'];
            $review = $_POST['review'];
            $tbl_name = 'ratingdb';

            if(isset($rate)){
            // get user email from session login
            $query3 = "SELECT email FROM userdb WHERE userId = '{$_SESSION['userId']}' ";
            $result2 = $pdo->query($query3);
            $result2 = $result2->fetch(PDO::FETCH_ASSOC);
            
            $email = $result2['email'];

            // insert into rating database
            $query = "INSERT INTO $tbl_name (ratingId, rate, review, email) 
            VALUES(NULL, '$rate', '$review', '$email')";

            // review submitted successfully
                $result = $pdo->query($query);
                echo "<script type='text/javascript'>alert('Review Submitted Successfully.');</script>";
                echo "<script type='text/javascript'>window.location.href = './rating_main.php';</script>";

            }else{
              echo "<script type='text/javascript'>alert('Rating is empty');</script>";

            }

    }else{
      // if user has not login
        echo "<script type='text/javascript'>alert('Please login or register your account.');</script>";
        echo "<script> location.href = './login.php';</script>";
    }
    
  }    

?>
