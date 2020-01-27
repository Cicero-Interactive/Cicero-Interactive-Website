---
layout: wrapper
title: Account
---

<?php 
	$ShowDelete = false;
?>

<div class="table" style="width: 100%">
	<tr>
		<td>
			<?php
				if (empty($_SESSION['username'])) {echo '<script>window.location.replace("login.php?redirect=account.php");</script>';}
			?>
			<?php
				if (isset($_GET['verify'])) {
					$message = '
Thank you for signing up!
Your account has been created, you can log in with the following credentials after you have activated your account by pressing the url below.

------------------------
Username: '.$username.'
Password: '.$password.'
------------------------

Please click this link to activate your account:
https://cicero-interactive.de.cool/verify.php?email='.hash("sha1", $_SESSION["email"]).'
'."
If this wasn't you and someone else used your email, you can delete this account here:
https://cicero-interactive.de.cool/account.php?delete";
					mail($email, "Cicero Interactive Account Verification", $message, "From: Cicero Interactive <cicerointeractivemail@gmail.com>");
					exit('<script>window.location.replace("verify.php");</script>');
				}

				if (isset($_GET['delete'])) {
					$ShowDelete = true;

					if ($_GET['delete'] == true) {
						if (empty($_POST['password'])) {
							$msg = '<div class="alertRed">PLEASE ENTER YOUR PASSWORD</div>';
						} else {
							global $db;
							$email = $_SESSION['email'];
							$password = hash("sha512", $_POST['password']);
							$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
							$result = $db->query($sql);
							if($result->num_rows > 0) {
								$sql = "DELETE FROM users WHERE email = '$email' AND password = '$password'";
								$db->query($sql);
								session_destroy();
								session_unset();
								exit('<script>window.location.replace("./");</script>');
							} else {
								$msg = '<div class="alertRed">WRONG PASSWORD</div>';
							}
							$db->close();
						}
					}
				}
			?>


			<div class="table main" style="text-align: center">
				<div class="row" style="height: 130px"></div>
				<?php if ($ShowDelete == false) { ?>
					<div class="row">
						<div style="max-width: 1100px; margin: auto;">
							<font size="7" color="#ddd">My Account</font>
							<br>
							<div>
								<?php if ($_SESSION['verified'] == False) { ?>
									You have to activate your account first before you can personalize it.<br>
									If the verification mail hasn't been sent or you lost the code, click <a href="?verify=1">here</a>.
								<?php } else { ?>
									Currently WIP!
								<?php } ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div style="margin-top: 75px;">
							<a class="button" href="?delete">Delete My Account</a>
						</div>
					</div>
				<?php } else { ?>
					<div class="row">
						<form action="?delete=1" method="post" style="margin: auto; max-width: 520px; background-color: unset">
							<font size="5" color="#ccc">Do you really wish to delete your account?</font><br><br>
							<?php if (isset($msg)) {echo $msg;} ?>
							All your data will be lost and will not be recoverable.<br><br>
							Password:<br>
							<input type="password" size="40"  maxlength="255" name="password" style="color: #999"><br><br><br>
							<input type="submit" value="Delete">
						</form>
					</div>
				<?php } ?>
				<div class="row" style="height: 50px"></div>
			</div>
		</td>
	</tr>
</table>