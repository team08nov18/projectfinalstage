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
if(isset($_POST['name'], $_POST['card'], $_POST['year'],  $_POST['month'], $_POST['cvv'])) {
    //make the database connection
    $conn  = db_connect();
	$name= $conn -> real_escape_string($_POST['name']);
    $card = $conn -> real_escape_string($_POST['card']);
    $year = $conn -> real_escape_string($_POST['year']);
	$month= $conn -> real_escape_string($_POST['month']);
	$cvv= $conn -> real_escape_string($_POST['cvv']);
	
    
    //create an insert query
    $sql = "insert into payment (name, card, year, month, cvv) 
			VALUES ('$name','$card', '$year', '$month', '$cvv')";
    //execute the query
    if($conn -> query($sql))
    {
        echo "<div class=\"container\">";
        echo "<h1>Booking Confirmation</h1>";
        echo "<p>Congratulations <b>$name</b></br></p>";
		echo "<p><b>Payment Successful.</b></br></p>";
        echo "<p>Please arrive <b>30 mins</b> before the movie.</br></p>";
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