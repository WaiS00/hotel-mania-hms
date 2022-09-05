<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "backend/attendance_backend.php"; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/attendance.css">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <title>Hotel Mania</title>
    <link rel="icon" href="resources/hm_logo.png"/>
</head>

<?php include 'include_php/header.php';?>

<body>

<h4>Attendance (clock-in/clock-out)</h4>
<form method="post">
  <div class="row justify-content-md-center">
    <div class="col col-lg-2">
    <?php 
        if(isset($_SESSION['attendanceDateTime'])){
    ?>
        <input type="submit" id="Button" name="submit" value="Clock-in" class="btn btn-primary submitbtn" readonly disabled >
    <?php 
        }else{
            ?>
                <input type="submit" id="Button" name="submit" value="Clock-in" class="btn btn-primary submitbtn" readonly>
            <?php 
        }
    ?>
    </div>
    <div class="col col-lg-2">
    </div>
    <div class="col col-lg-2">
    <?php 
        if(isset($_SESSION['attendanceDateTime'])){
    ?>
        <input type="submit" id="Button" name="submit" value="Clock-out" class="btn btn-primary submitbtn" readonly disabled >
    <?php 
        }else{
            ?>
                <input type="submit" id="Button" name="submit" value="Clock-out" class="btn btn-primary submitbtn" readonly>
            <?php 
        }   ?>
    </div>
  </div>
</form>
    <table style="margin-left: auto; margin-right: auto; border: 1px solid;border-collapse: collapse; width: 50%;">
        <tr>
            <td style="border: 1px solid;text-align: center;"><b> Attendance Date Time <b> </td>
            <td style="border: 1px solid;text-align: center;"><b> Attendance Type <b> </td>
            <td style="border: 1px solid;text-align: center;"><b> Full Name<b> </td>
        </tr>
        <tr>
        <?php 
            $query = "SELECT * FROM attendancedb";
            $product_array = $product_db->getAttendance($query);
            if (!empty($product_array)) {
                foreach ($product_array as $key => $value) {
        ?>
            <td style="border: 1px solid;text-align: center;"><?php echo $product_array[$key]["attendanceDateTime"]; ?> </td>
            <td style="border: 1px solid;text-align: center;"><?php echo $product_array[$key]["attendanceType"]; ?> </td>
            <td style="border: 1px solid;text-align: center;"><?php echo $product_array[$key]["fullName"]; ?> </td>
        </tr>
        <?php }} ?>
    </table>

<?php include 'include_php/footer.php';?>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>