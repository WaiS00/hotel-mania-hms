<?php require_once 'backend/timeslot_backend.php';?>
<?php require_once "backend/config.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <title>Hotel Mania</title>
    <link href="css/timeslot.css" type="text/css" rel="stylesheet" />
    <link rel="icon" href="resources/hm_logo.png"/>
</head>

<?php include 'include_php/header.php';?>

<h4>Worker's Timeslot</h4>
<table style="margin-left: auto; margin-right: auto; border: 1px solid;border-collapse: collapse; width: 50%;">
        <tr>
            <td style="border: 1px solid;text-align: center;"><b> Worker's Name<b> </td>
            <td style="border: 1px solid;text-align: center;"><b> User Type (Worker/ Manager) <b> </td>
            <td style="border: 1px solid;text-align: center;"><b> Working Position<b> </td>
            <td style="border: 1px solid;text-align: center;"><b> Job Status <b> </td>
        </tr>
        <?php
        $query = "SELECT * FROM workerdb";
        $product_array = $product_db->getWorkerInformation($query);
        if (!empty($product_array)) {
            foreach ($product_array as $key => $value) {
                ?>
        <tr>
            <td style="border: 1px solid;text-align: center;"><?php echo $product_array[$key]["fullName"]; ?></td>
            <td style="border: 1px solid;text-align: center;"><?php echo $product_array[$key]["userType"]; ?></td>
            <td style="border: 1px solid;text-align: center;"><?php echo $product_array[$key]["workPosition"]; ?></td>
            <td style="border: 1px solid;text-align: center;"><?php echo $product_array[$key]["jobStatus"]; ?></td>
        </tr>
        <?php }}?>
    </table>


<body>


<?php include 'include_php/footer.php';?>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>