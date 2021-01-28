<?php include('includes/functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	
	<!-- Favicons -->
	<link href="image/chatnode-logo.png" rel="icon">
	<link href="image/chatnode-logo.png" rel="ChatNode_logo">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>

	<form method="post" action="register.php">

		<?php
			$year = date('Y')-8;
		 	echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" maxlength="8" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Firstname</label>
			<input type="text" name="fname" value="">
		</div>
		<div class="input-group">
			<label>Lastname</label>
			<input type="text" name="lname" value="">
		</div>
		<div class="input-group">
			<label>Birthday</label>
			<input type="date" name="birthday" min="1901-01-01" max="<?php echo $year; ?>-12-31" value="<?php echo $birthday; ?>" class="form-1" title="Enter your username" required />
		</div>
		<div class="input-group">
			<label>Gender</label>
			<select name="gender" style="font-size:22px;" required>
				<option>Male</option>
				<option>Female</option>
			</select>
		</div>
		<div class="input-group">
			<label>Mobile</label>
			<input type="text" name="number" maxlength="10" value="">
		</div>
		<div class="input-group">
			<label>Profile Picture</label>
			<input type="file" name="profile">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Log in</a>
		</p>
	</form>
</body>
</html>
