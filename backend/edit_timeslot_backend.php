<?php
include_once("product_db.php");

$crud = new product_db();

// get worker id from the button 
$workerId = $_GET['workerId'];

$result = $crud->getData("SELECT * FROM workerdb WHERE workerId = $workerId");

// return each of the data where worker id = worker id that login 
foreach ($result as $res) {
	$fullName = $res['fullName'];
	$jobStatus = $res['jobStatus'];
	$userType = $res['userType'];
	$workPosition = $res['workPosition'];
}
?>