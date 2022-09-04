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
  <div class="row justify-content-md-center">
    <div class="col col-lg-2">
        <input id="Button" type="clockin" value="Clock-in" name="clockin" class="btn btn-primary submitbtn">
    </div>
    <div class="col col-lg-2">
    </div>
    <div class="col col-lg-2">
        <input id="Button" type="clockout" value="Clock-out" name="clockout" class="btn btn-primary submitbtn">
    </div>
  </div>
    <table style="margin-left: auto; margin-right: auto; border: 1px solid;border-collapse: collapse; width: 50%;">
        <tr>
            <td style="border: 1px solid;text-align: center;"><b> Clock-in Date Time <b> </td>
            <td style="border: 1px solid;text-align: center;"><b> Clock-out Date Time <b> </td>
        </tr>              
    </table>

<?php include 'include_php/footer.php';?>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>