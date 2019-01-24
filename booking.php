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
    <title>Bookings</title>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>


<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
</head>
<body>

<h2 align="center">Movies: Now Showing</h2>

<br>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/aqua.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2 align="center">Aquaman</h2>
        <p class="title" align="center">Session Timings:</p>
        <p align="center"><a href="seatselection.php">09.00AM</a> &emsp; <a href="seatselection.php"> 12.00PM</a> &emsp; <a href="seatselection.php"> 03.00PM</a><br>
        <a href="seatselection.php">06.00PM</a> &emsp; <a href="seatselection.php"> 09.00PM</a> </p>
        <p><button class="button"><a href="https://www.youtube.com/watch?v=WDkg3h8PCVU" target="_blank">View Trailer</a></button></p>
        <p><button class="button"><a href="seatselection.php">Book Now</a></button></p>
      </div>
    </div>
  </div>
  


  <div class="column">
    <div class="card">
      <img src="images/mp.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2 align="center">Marry Poppins Returns</h2>
        <p class="title" align="center">Session Timings:</p>
        <p align="center"><a href="seatselection.php">09.00AM</a> &emsp; <a href="seatselection.php"> 12.00PM</a> &emsp; <a href="seatselection.php"> 03.00PM</a><br>
        <a href="seatselection.php">06.00PM</a> &emsp; <a href="seatselection.php"> 09.00PM</a> </p>
        <p><button class="button"><a href="https://www.youtube.com/watch?v=-_wgi9OFG60" target="_blank">View Trailer</a></button></p>
        <p><button class="button"><a href="seatselection.php">Book Now</a></button></p>
      </div>
    </div>
  </div>
  
    <div class="column">
    <div class="card">
      <img src="images/beast.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2 align="center">Beauty and the Beast</h2>
        <p class="title" align="center">Session Timings:</p>
        <p align="center"><a href="seatselection.php">09.00AM</a> &emsp; <a href="seatselection.php"> 12.00PM</a> &emsp; <a href="seatselection.php"> 03.00PM</a><br>
        <a href="seatselection.php">06.00PM</a> &emsp; <a href="seatselection.php"> 09.00PM</a> </p>
        <p><button class="button"><a href="https://www.youtube.com/watch?v=e3Nl_TCQXuw" target="_blank">View Trailer</a></button></p>
        <p><button class="button"><a href="seatselection.php">Book Now</a></button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="images/fb.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2 align="center">Fantastic Beasts</h2>
        <p class="title" align="center">Session Timings:</p>
        <p align="center"><a href="seatselection.php">09.00AM</a> &emsp; <a href="seatselection.php"> 12.00PM</a> &emsp; <a href="seatselection.php"> 03.00PM</a><br>
        <a href="seatselection.php">06.00PM</a> &emsp; <a href="seatselection.php"> 09.00PM</a> </p>
        <p><button class="button"><a href="https://www.youtube.com/watch?v=8bYBOVWLNIs" target="_blank">View Trailer</a></button></p>
        <p><button class="button"><a href="seatselection.php">Book Now</a></button></p>
      </div>
    </div>
  </div>


  <div class="column">
    <div class="card">
      <img src="images/spider.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2 align="center">Spider-Man: Into The Spider Verse</h2>
        <p class="title" align="center">Session Timings:</p>
        <p align="center"><a href="seatselection.php">09.00AM</a> &emsp; <a href="seatselection.php"> 12.00PM</a> &emsp; <a href="seatselection.php"> 03.00PM</a><br>
        <a href="seatselection.php">06.00PM</a> &emsp; <a href="seatselection.php"> 09.00PM</a> </p>
        <p><button class="button"><a href="https://www.youtube.com/watch?v=g4Hbz2jLxvQ" target="_blank">View Trailer</a></button></p>
        <p><button class="button"><a href="seatselection.php">Book Now</a></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/dp.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2 align="center">Deadpool 2</h2>
        <p class="title" align="center">Session Timings:</p>
        <p align="center"><a href="seatselection.php">09.00AM</a> &emsp; <a href="seatselection.php"> 12.00PM</a> &emsp; <a href="seatselection.php"> 03.00PM</a><br>
        <a href="seatselection.php">06.00PM</a> &emsp; <a href="seatselection.php"> 09.00PM</a> </p>
        <p><button class="button"><a href="https://www.youtube.com/watch?v=PCf03KXyzIg" target="_blank">View Trailer</a></button></p>
        <p><button class="button"><a href="seatselection.php">Book Now</a></button></p>
      </div>
    </div>
  </div>

<?php include("include/footer.inc") ?>
</body>
</html>
