<?php
require_once 'SQL_login.php';

if(isset($_POST['update'])){
    
    $fullName = $_POST['fullName'];
	$jobStatus = $_POST['jobStatus'];
	$userType = $_POST['userType'];
	$workPosition = $_POST['ddlselect'];
	
    $query = "UPDATE workerdb SET fullName='$fullName',jobStatus='$jobStatus',userType='$userType', workPosition='$workPosition' WHERE workerId=$workerId";
    $result = $pdo->query($query);

    echo "<script type='text/javascript'>alert('udpate');</script>";
    header("Location: ./timeslot.php");
	
}
?>
