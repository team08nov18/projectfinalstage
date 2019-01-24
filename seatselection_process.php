<?php
//must appear BEFORE the <html> tag
session_start();
include_once('include/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/read_more.js"></script>
    <title>ABC</title>
</head>
<body onLoad="run_first()">
<?php include("include/banner.inc") ?>
<?php include("include/nav.inc") ?>
<?php
if(isset($_POST['name'], $_POST['email'],  $_POST['movie'], $_POST['time'], $_POST['seat'])) {
    //make the database connection
    $conn  = db_connect();
    $name = $conn -> real_escape_string($_POST['name']);
    $email = $conn -> real_escape_string($_POST['email']);
	$movie= $conn -> real_escape_string($_POST['movie']);
	$time= $conn -> real_escape_string($_POST['time']);
	$seat= $conn -> real_escape_string($_POST['seat']);
    
    //create an insert query
    $sql = "insert into booking (name, email, movie, time, seat) 
			VALUES ('$name', '$email', '$movie', '$time', '$seat')";
    //execute the query
    if($conn -> query($sql))
    {
        echo "<div class=\"container\">";
        echo "<h1>Booking Confirmation</h1>";
        echo "<p>Hi <b>$name</b></br> Your booking details have been stored.</p>";
		echo "<p>Movie name: <b>$movie</b>";
		echo "<p>Movie time: <b>$time</b>";
		echo "<p>Seat Number: <b>$seat</b>";
        echo "<p><a href=\"payment.php\" id=\"4\" 
				onClick=\"nav_item_selected(4)\">Please proceed for payment</a></p>";
        echo "</div>";
    }
	else 
	 echo $conn->error;
    $conn -> close();
}
else {
    die("Input error");
}
?>
<?php include("include/footer.inc") ?>
</body>
</html>