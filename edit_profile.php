<?php
require('includes/database.php');
$id =$_REQUEST['user_id'];
$year = date('Y')-8;
$result = mysqli_query($conn, "SELECT * FROM user WHERE user_id  = '$id' ");
$test = mysqli_fetch_array($result);
if (!$result)
		{
		die("Error: Data not found..");
		}
$firstname=$test['firstname'];
$lastname=$test['lastname'];
$username=$test['username'];
$birthday=$test['birthday'];
$gender=$test['gender'];
$number=$test['number'];

if(isset($_POST['save']))
{
$first_save=$_POST['firstname'];
$last_save=$_POST['lastname'];
$username_save=$_POST['username'];
$birthday_save=$_POST['birthday'];
$gender_save=$_POST['gender'];
$number_save=$_POST['number'];

	mysqli_query($conn, "UPDATE user SET firstname ='$first_save', lastname ='$last_save', username ='$username_save',
	birthday ='$birthday_save' , gender ='$gender_save', number ='$number_save' WHERE user_id = '$id'")
				or die(mysqli_error());
	echo "Saved!";

	header("Location: profile.php");
}

?>

<?php include 'includes/header.php' ?>

	<div id="container">

		<div id="left-nav">

				<div class="clip1">
				<a href="updatephoto.php" title="Change Profile Picture"><img src="<?php echo $row['profile_picture'] ?>"></a>
				</div>

				<div class="user-details">
					<h3><?php echo $firstname ?>&nbsp;<?php echo $lastname ?></h3>
				</div>
		</div>



		<div id="right-navp">
			<h1>Edit Info</h1>

		<div id="left-navp">

		<fieldset class="-------------">
			<table cellpadding="5" cellspacing="5">

<form method="post">
				<tr>
					<td><label>First name</label></td>
					<td><input type="text" name="firstname" value="<?php echo $firstname; ?>" placeholder="Enter your firstname....." class="form-1" title="Enter your firstname" required /></td>
				</tr>
				<tr>
					<td><label>Last name</label></td>
					<td><input type="text" name="lastname" value="<?php echo $lastname; ?>" placeholder="Enter your lastname....." class="form-1" title="Enter your lastname" required /></td>
				</tr>
				<tr>
					<td><label>User name</label></td>
					<td><input type="text" name="username" maxlength="8" value="<?php echo $username; ?>" placeholder="Enter your username....." class="form-1" title="Enter your username" required /></td>
				</tr>
				<tr>
					<td><label>Birthday</label></td>
					<td><input type="date" name="birthday" min="1901-01-01" max="<?php echo $year; ?>-12-31" value="<?php echo $birthday; ?>" class="form-1" title="Enter your username" required /></td>
				</tr>
				<tr>
					<td><label>Gender</label></td>
					<td>
						<select name="gender" class="form-1" value="<?php echo $gender; ?>">
							<?php if ($gender == "Male") { ?>
								<option>Male</option>
								<option>Female</option>
							<?php } else { ?>
								<option>Female</option>
								<option>Male</option>
							<?php } ?>
						</select>
					</td>
				</tr>
				<tr>
					<td><label>Mobile number</label></td>
					<td><input type="text" name="number" value="<?php echo $number; ?>" placeholder="09...." maxlength="13" class="form-1" title="Enter your mobile number" required /></td>
				</tr>
			</table>
		</fieldset>
<br />
		<button type="submit" name="save" class="">Save</button>
		</div>

		</div>
	</div>

</body>

</html>
