<?php session_start();?>
<?php require_once 'backend/rating_backend.php';?>

<!DOCTYPE html>
<html lang="en">

<HEAD>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link href="css/rating.css" type="text/css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Hotel Mania</title>
    <link rel="icon" href="resources/hm_logo.png" />
</HEAD>

<body>
	<?php include 'include_php/header.php';?>
	<form method="post">
		<table class="center">
			<legend>Rate and review</legend>
			<tr>
                <td><label>Rating: </label></td>
                <td>	
                    <div class="rate">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                    </div>
                </td>
			</tr>
			<tr>
				<td><label>Review: </label></td>
                <td><textarea class="form-control" rows="5" placeholder="Write your review here..." name="review" id="review" required></textarea><br><td>
			</tr>																													
			<tr>
				<td></td>
				<td><input id="Button" type="submit" value="Submit" name="submit" class="btn btn-primary submitbtn"></td>
			</tr>
		</table>		
	</form>
	<?php include 'include_php/footer.php';?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>

