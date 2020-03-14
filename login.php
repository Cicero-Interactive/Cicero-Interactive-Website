<?php
	session_start();
	$active = "login";
	$ShowFormContent = True;
	$db = new mysqli('localhost', 'USER381689_main', '721E39774B1781B01C4FF0CAAE5858EEC1AADB8F058CD8FA04DE7EF3EFDD6147', 'db_381689_2');
	if ($db->connect_error) {exit("Connection to database couldn't be established.");}
	
	if (isset($_GET['redirect'])) {
		$page = $_GET['redirect'];
	} else {
		$page = "./";
	}
?>

<!DOCTYPE html>
<html> 
	<head>
		<title>Log In | Cicero Interactive</title>
		<link rel="stylesheet" href="css/w3.css">
		<link rel="stylesheet" href="css/stylesheet.css">
		<link rel="icon" type="image/png" href="assets/img/favicon.ico">
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
					<div class="blurBg" style="background-image: url(assets/img/bgLogin.png); background-position: center top; z-index: -1; height: 99%; top: 0"></div>
					<?php include('components/lvl1/nav.php'); ?>
				</td>
			</tr>

			<?php
				function main() {
					if (empty($_GET['login'])) {return;}
					global $db, $page, $msg, $email, $password;
					if (empty($_POST['email'])) {$msg = '<div class="alertRed">PLEASE ENTER YOUR E-MAIL</div>'; return;}
					$email = $_POST['email'];
					if (empty($_POST['password'])) {$msg = '<div class="alertRed">PLEASE ENTER YOUR PASSWORD</div>'; return;}
					$password = hash("sha512", $_POST['password']);
					$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
					$result = $db->query($sql);
					$db->close();
					if($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
							$_SESSION["username"] = $row["username"];
							$_SESSION["email"] = $row["email"];
							$_SESSION["password"] = $row["password"];
							$_SESSION["date_added"] = $row["date_added"];
							$_SESSION["verified"] = $row["verified"];
							$_SESSION["date_verified"] = $row["date_verified"];
							$_SESSION["newsletter"] = $row["newsletter"];
						}
						exit('<script>window.location.replace("'.$page.'");</script>');
					} else {
						$msg = '<div class="alertRed">WRONG E-MAIL OR PASSWORD</div>';
					}
				}
				main();
			?>
			<tr>
				<td>
					<div style="margin: 10% 0% 20% 0%">
						<form action="<?php if (isset($page)) {echo "?login=1&redirect=".$page;} else {echo "?login=1";} ?>" method="post" style="width: 350px; margin: auto; text-align: center">
							<font size="5" color="#ccc" style="border-bottom: 1px solid rgba(200, 200, 200, 0.75)">&nbsp;Log In&nbsp;</font><br><br><br>
							<?php if (isset($msg)) {echo $msg;} if ($ShowFormContent == True) { ?>
								E-Mail:<br>
								<input type="email" size="40" maxlength="255" name="email" style="color: #999" <?php if (!empty($email)) {echo 'value="'.$email.'"';} ?>><br><br>
								Password:<br>
								<input type="password" size="40"  maxlength="255" name="password" style="color: #999"><br><br><br><br>
								<input type="submit" value="Send">
							<?php } ?>
						</form>
					</div>
				</td>
			</tr>
		</table>
	</body>
</html>