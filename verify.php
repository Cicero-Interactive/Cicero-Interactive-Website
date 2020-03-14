<?php 
	session_start();
	$active = "register";
	$db = new mysqli('localhost', 'USER381689_main', '721E39774B1781B01C4FF0CAAE5858EEC1AADB8F058CD8FA04DE7EF3EFDD6147', 'db_381689_2');
	if ($db->connect_error) {exit("Connection to database couldn't be established.");}
?>

<!DOCTYPE html>
<html> 
	<head>
		<title>Acount Verification | Cicero Interactive</title>
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
			<tr>
				<td>
					<div style="margin-bottom: 10%">
						<?php 
							$email = $_GET['email'];
							if (!isset($email)) {								
								$headline = "Registered successfully";
								$content = "A verification link will be sent to your email address. Use it to activate your account.";
							} else {
								$sql = "SELECT * FROM users WHERE SHA1(email) = '$email'";
								$result = mysqli_query($db, $sql);
								if (mysqli_num_rows($result) == 0) {
									$headline = "Error";
									$content = '<div class="alertRed">THERE IS NO ACCOUNT REGISTERED WITH THIS EMAIL ADDRESS!</div>';
								} else {
									$sql = "SELECT verified FROM users WHERE SHA1(email) = '$email' AND verified = 1";
									$result = mysqli_query($db, $sql);
									if (mysqli_num_rows($result) >= 1) {
										while ($row = $result->fetch_assoc()) {
											$_SESSION["verified"] = $row["verified"];
											$_SESSION["date_verified"] = $row["date_verified"];
										}
										$headline = "Already verified";
										$content = 'Your account is already verified.
											<div style="padding: 25px 0px 15px 0px; display: inline-block; text-shadow: none">
												<a class="button" href="./">Home</a>
												<a class="button" href="account.php">Manage Your Account</a>
											</div>';
									} else {
										$sql = "UPDATE users SET verified = 1 WHERE SHA1(email) = '$email'";
										mysqli_query($db, $sql);
										$sql = "UPDATE users SET date_verified = now() WHERE SHA1(email) = '$email'";
										mysqli_query($db, $sql);

										$sql = "SELECT * FROM users WHERE SHA1(email) = '$email'";
										$result = mysqli_query($db, $sql);
										while ($row = $result->fetch_assoc()) {
											$_SESSION["verified"] = $row["verified"];
											$_SESSION["date_verified"] = $row["date_verified"];
										}
										$headline = "Verified successfully";
										$content = 'You can now use your account.
											<div style="padding: 25px 0px 15px 0px; display: inline-block; text-shadow: none">
												<a class="button" href="./">Home</a>
												<a class="button" href="account.php">Manage Your Account</a>
											</div>';
									}
								}
								$db->close();
							}
						?>
						<form style="width: 350px; margin: auto; padding: 15px 15px 15px 15px; text-align: center; text-shadow: 1px 1px 1px #000">
							<font size="5" color="#ccc" style="border-bottom: 1px solid rgba(200, 200, 200, 0.75)">&nbsp;<?php echo $headline; ?>&nbsp;</font><br><br><br>
							<?php echo $content; ?>
						</form>
					</div>
				</td>
			</tr>
		</table>
	</body>
</html>