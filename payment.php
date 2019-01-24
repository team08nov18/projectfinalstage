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
    <title>ABC</title>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>
    <div class="container">
    	<form action="payment_process.php" method="post">
        <div class="bg-light mt-3 px-2 member_frm" style="border-radius: 5px; border: black solid thick">
        	<h1>Payment Information</h1>
            <h2>Please enter your Credi/Debit Card Details:</h2>
            <p><i>Fields marked with an asterisk (*) must be entered.</i></p>
			
            <div class="row">
            	<div class="col">
                	<label for="name">* Name on card:</label>
                    <input type="text" id="name" name="name" size="30" maxlength="50" required />
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label for="card">* Card Number:</label>
                    <input type="text" id="card" name="card" size="16" maxlength="16" placeholder="16 digits"
                               onChange="checkcard(document)" required />
                    <span class="error_msg" id="card_msg"></span>
                </div>
            </div>
            
             <div class="row">
            	<div class="col">
                <label for="month">Exp Mon:</label>
                
            	<select name="month">
 				 	<option value="January">Jan</option>
  					<option value="February">Feb</option>
  					<option value="March">Mar</option>
  					<option value="April">Apr</option>
                    <option value="May">May</option>
                    <option value="June">Jun</option>
                    <option value="July">Jul</option>
                    <option value="August">Aug</option>
                    <option value="September">Apr</option>
                    <option value="October">Oct</option>
                    <option value="November">Nov</option>
                    <option value="December">Dec</option>
				</select>
                
                
                <select name="year">
 				 	<option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                 </select>
               	</div>
            </div>
             <div class="row">
            	<div class="col">
                	<label for="cvv">* CVV:</label>
                    <input type="text" id="cvv" name="cvv" size="3" maxlength="3" placeholder="3 digits"
                               onChange="checkcvv(document)" required />
                    <span class="error_msg" id="cvv_msg"></span>
                </div>
            </div>
            
            <div class="row">
            	<div class="col">
                	<label>&nbsp;</label>
                    <input type="submit" id="submit" value="Submit" onClick="return validateInfo(document) validateInfo2(document)"/>
                    
                    <input type="reset" id="reset" value="Clear Form" onClick="reset_frm(document)" />
                </div>
            </div>
        </div>
        </form>
    </div>
	<?php include("include/footer.inc") ?>
</body>
</html>
