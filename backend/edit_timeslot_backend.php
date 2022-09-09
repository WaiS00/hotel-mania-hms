<?php
include_once("product_db.php");

$crud = new product_db();

$workerId = $_GET['workerId'];

$result = $crud->getData("SELECT * FROM workerdb WHERE workerId = $workerId");

foreach ($result as $res) {
	$fullName = $res['fullName'];
	$jobStatus = $res['jobStatus'];
	$userType = $res['userType'];
	$workPosition = $res['workPosition'];
}
?>