<?php 
	session_start();
	$active = "register";
	$ShowFormContent = True;
	$db = new mysqli('localhost', 'USER381689_main', '721E39774B1781B01C4FF0CAAE5858EEC1AADB8F058CD8FA04DE7EF3EFDD6147', 'db_381689_2');
	if ($db->connect_error) {exit("Connection to database couldn't be established.");}
?>

<!DOCTYPE html>
<html> 
	<head>
		<title>Register | Cicero Interactive</title>
		<link rel="stylesheet" href="css/w3.css">
		<link rel="stylesheet" href="css/stylesheet.css">
		<link rel="icon" type="image/png" href="images/favicon.ico">
		<script src="js/sidepnl.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=0.70">
		<meta name="theme-color" content="black">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<meta charset="utf-8">
	</head>
	
	<body>
		<table style="width: 100%; height: 100vh">
			<tr>
				<td>
					<div class="blurBg" style="background-image: url(images/bgLogin.png); background-position: center top; z-index: -1; height: 99%"></div>
					<?php include('components/lvl1/nav.php'); ?>
				</td>
			</tr>
			<tr>
				<td style="height: 80px"></td>
			</tr>

			<?php
				function main() {
					if (empty($_GET['register'])) {return;}
					global $db, $page, $msg, $username, $email, $password, $redirect;
					if (empty($_POST['email'])) {$msg = '<div class="alertRed">PLEASE ENTER YOUR E-MAIL</div>'; return;}
					$email = $_POST['email'];
					if (empty($_POST['username'])) {$msg = '<div class="alertRed">PLEASE ENTER A USERNAME</div>'; return;}
					$username = $_POST['username'];
					if (empty($_POST['password'])) {$msg = '<div class="alertRed">PLEASE ENTER A PASSWORD</div>'; return;}
					$sql = "SELECT email FROM users WHERE email = '$email'";
					$result = mysqli_query($db, $sql);
					if(mysqli_num_rows($result) >= 1) {$msg = '<div class="alertRed">THERE ALREADY EXISTS AN ACCOUNT WITH THIS EMAIL</div>'; return;}
					$sql = "SELECT email FROM users WHERE username = '$username'";
					$result = mysqli_query($db, $sql);
					if(mysqli_num_rows($result) >= 1) {$msg = '<div class="alertRed">THIS USERNAME IS ALREADY TAKEN</div>'; return;}
					$password = $_POST['password'];
					$passwordhash = hash("sha512", $password);
					$sql = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$passwordhash')";
					if ($db->query($sql) == False) {echo "Error".$db->error;} else {$ShowFormContent = False;}
					$db->close();
					$ShowFormContent = False;
					$redirect = True;
				}
				main();
			?>

			<tr>
				<td>
					<div style="margin-bottom: 10%">
						<?php 
							if (isset($redirect)) {
								$message = '
Thank you for signing up!
Your account has been created, you can log in with the following credentials after you have activated your account by pressing the url below.

------------------------
Username: '.$username.'
Password: '.$password.'
------------------------

Please click this link to activate your account:
https://cicero-interactive.de.cool/verify.php?email='.hash("sha1", $email).'
'."
If this wasn't you and someone else used your email, you can delete this account here:
https://cicero-interactive.de.cool/account.php?delete";
								mail($email, "Cicero Interactive Account Verification", $message, "From: Cicero Interactive <cicerointeractivemail@gmail.com>");
								echo '<script>window.location.replace("verify.php");</script>';
							}
						?>
						
						<form action="<?php echo "?register=1"; ?>" method="post" style="width: 350px; margin: auto; text-align: center">
							<font size="5" color="#ccc" style="border-bottom: 1px solid rgba(200, 200, 200, 0.75)">&nbsp;Register&nbsp;</font><br><br><br>
							<?php if (isset($msg)) {echo $msg;} if ($ShowFormContent == True) { ?>
								E-Mail:<br>
								<input type="email" size="40" maxlength="255" name="email" style="color: #999" <?php if (!empty($email)) {echo 'value="'.$email.'"';} ?>><br><br>
								Username:<br>
								<input type="text" size="40" maxlength="255" name="username" style="color: #999" <?php if (!empty($username)) {echo 'value="'.$username.'"';} ?>><br><br>
								Password:<br>
								<input type="password" size="40"  maxlength="255" name="password" style="color: #999"><br><br><br><br>
								<input type="submit" value="Send">
							<?php } ?>
						</form>
					</div>
					
					<!--<div style="width: 100%; bottom: 0px; position: absolute; z-index: -1">
						<div id="footerTop"></div>
						<script>$("#footerTop").load("components/lvl1/footerTop.html");</script>
						
						<div id="footerBottom"></div>
						<script>$("#footerBottom").load("components/lvl1/footerBottom.html");</script>
					</div>-->
				</td>
			</tr>
			<!--<tr>
				<td style="height: 100px;"></td>
			</tr>-->
		</table>
	</body>
</html>