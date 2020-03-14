---
layout: wrapper
title: Verify
---
<div class="table" style="width: 100%">
	<div class="blurBg" style="background-image: url(assets/img/bgLogin.png); background-position: center top; z-index: -1; height: 99%"></div>
	<div class="tr">
		<div class="td" style="height: 80px"></div>
	</div>
	<div class="tr">
		<div class="td">
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
		</div>
	</div>
</div>