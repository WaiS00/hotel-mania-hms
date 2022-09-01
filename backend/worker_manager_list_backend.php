<?php

require_once 'SQL_login.php';

    $userId = $_GET['userId'];

    $query1 = "DELETE FROM workerdb WHERE userId = $userId";
    $result = $pdo->query($query1);

    $query2 = "DELETE FROM userdb WHERE userId = $userId";
    $result1 = $pdo->query($query2);

    echo "<script type='text/javascript'>alert('Account has been successfully deleted.');</script>";
    echo "<script type='text/javascript'>window.location.href = '../worker_manager_list.php';</script>";

?>