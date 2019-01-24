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
    <link rel="stylesheet" type="text/css" href="css/member.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles2.css">
    <link rel="stylesheet" type="text/css" href="styles/footer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/read_more.js"></script>
    <title>Member</title>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>
    <div class="container">
    	<form action="member_process.php" method="post">
        <div class="bg-light mt-3 px-2 member_frm" style="border-radius: 5px;  background-color: black; border: black">
        	<h1>Membership Form</h1>
            <h3>Please enter your profile</h3>
            <h5><i>Fields marked with an asterisk (*) must be entered.</i></h5>
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
                	<label for="password">* Password:</label>
                    <input type="password" id="password" name="password" size="20" maxlength="20" required />
                    <span id="pwd_msg" class="error_msg"></span>
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label for="rePassword">* Re-try:</label>
                    <input type="password" id="rePassword" size="20" maxlength="20"
                               onChange="checkRePassword(document)" />
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label for="zip">* Postcode:</label>
                    <input type="text" id="zip" name="zip" size="10" maxlength="10" placeholder="4 digits"
                               onChange="checkZIPCode(document)" required />
                    <span class="error_msg" id="zip_msg"></span>
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label>&nbsp;</label>
                    <input type="submit" id="submit" value="Submit" onClick="return validateInfo(document)" />
                    <input type="reset" id="reset" value="Clear Form" onClick="reset_frm(document)" />
                </div>
            </div>
        </div>
        </form>
    </div>
	<?php include("include/footer.inc") ?>
</body>
</html>


