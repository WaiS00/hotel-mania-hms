<?php
require_once 'SQL_login.php';

if(isset($_POST['update'])){
    
    $fullName = $_POST['fullName'];
	$jobStatus = $_POST['jobStatus'];
	$userType = $_POST['userType'];
	$workPosition = $_POST['ddlselect'];
	
    // set new values 
    $query = "UPDATE workerdb SET fullName='$fullName',jobStatus='$jobStatus',userType='$userType', workPosition='$workPosition' WHERE workerId=$workerId";
    $result = $pdo->query($query);

    // display success message
    echo "<script type='text/javascript'>alert('Working Position updated successfully.');</script>";
    echo "<script> location.href = './timeslot.php';</script>";
	
}
?>
