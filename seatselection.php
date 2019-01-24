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
    <script src="js/member.js"></script>
    <script src="js/member2.js"></script>
    <link rel="stylesheet" href="css/member.css">
    <title>Seat Selection</title>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>
    <div class="container">
    	<form action="seatselection_process.php" action="payment_process.php" method="post">
        <div class="bg-light mt-3 px-2 member_frm" style="border-radius: 5px; border: black solid thick">
        	<h1>Booking Details</h1>
            <h2>Please enter your profile</h2>
            <p><i>Fields marked with an asterisk (*) must be entered.</i></p>
 			<div class="row">
            	<div class="col">
                	<label for="name">* Name:</label>
                    <input type="text" id="name" name="name" size="30" maxlength="50" required />
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label for="email">* Email:</label>
                	<input type="email" id="email" name="email" size="30" maxlength="50" required />
                </div>
            </div>
 			<div class="row">
            	<div class="col">
                <label for="movie">Select the Movie</label>
                <select name="movie">
            		<option value="Aquaman">Aquaman</option>
  					<option value="Marry Poppins Returns">Marry Poppins Returns</option>
  					<option value="Beauty And The Beast">Beauty And The Beast</option>
  					<option value="Fantastic Beasts">Fantastic Beasts</option>
                    <option value="Deadpool 2">Deadpool 2</option>
                </select>
               	</div>
    		</div>                      
			<div class="row">
            	<div class="col">
                <label for="time">Select Show TimingsL</label>
				<select name="time">
            		<option value="09.00AM">09.00AM</option>
  					<option value="12.00PM">12.00PM</option>
  					<option value="03.00PM">03.00PM</option>
  					<option value="06.00PM">06.00PM</option>
                    <option value="09.00PM">09.00PM</option>
                 </select>
               	</div>
    		</div>
    		<div class="row">
            	<div class="col" id="seat">
                <label for="seat">Select Seat no:</label>
				<select name="seat">
            		<option value="A-1">A-1</option>
  					<option value="A-2">A-2</option>
  					<option value="A-3">A-3</option>
  					<option value="A-4">A-4</option>
                    <option value="A-5">A-5</option>
                    <option value="A-6">A-6</option>
                    <option value="A-7">A-7</option>
                    <option value="A-8">A-8</option>
                    <option value="A-9">A-9</option>
                    <option value="A-10">A-10</option>
                  </select> 
                <input type="submit" name="submit" value="Submit" />
               	</div>
			</div>
           </div>               
        </form>
    </div>
	<?php include("include/footer.inc") ?>
</body>
</html>
