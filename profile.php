<?php include 'includes/header.php' ?>

	<div id="container">

		<div id="left-nav">

				<div class="clip1">
				<a href="updatephoto.php" title="Change Profile Picture"><img src="<?php echo $row['profile_picture'] ?>"></a>
				</div>

				<div class="user-details">
					<h3><?php echo $firstname ?>&nbsp;<?php echo $lastname ?></h3>
					<!-- <h2><?php //echo $username ?></h2> -->
				</div>
		</div>



		<div id="right-nav">
			<h1 style="margin-left:60px; margin-top:30px;">Personal Info</h1>
			<hr style="width:85%"/>
			<br />
			<?php
			include('includes/database.php');

			$result=mysqli_query($conn, "SELECT * FROM user where user_id='$id' ");

			while($test = mysqli_fetch_array($result))
			{
				$id = $test['user_id'];
				echo " <div class='info-user'>";
				echo " <div>";
				echo " <label>Firstname</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['firstname']."</b>";
				echo "</div> ";
				echo "<hr /> ";
				echo "<br /> ";
				echo " <div>";
				echo " <label>Lastname</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['lastname']."</b>";
				echo "</div> ";
				echo "<hr /> ";
				echo "<br /> ";
				echo " <div>";
				echo " <label>Username</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['username']."</b>";
				echo "</div> ";
				echo "<hr /> ";
				echo "<br /> ";
				echo " <div>";
				echo " <label>Credits</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['credits']."</b>";
				echo "</div> ";
				echo "<hr /> ";
				echo "<br /> ";
				echo " <div>";
				echo " <label>Birthday</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['birthday']."</b>";
				echo "</div> ";
				echo "<hr /> ";
				echo "<br /> ";
				echo " <div>";
				echo " <label>Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['gender']."</b>";
				echo "</div> ";
				echo "<hr /> ";
				echo "<br /> ";
				echo " <div>";
				echo " <label>Number</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['number']."</b>";
				echo "</div> ";
				echo "<hr /> ";
				echo "<br /> ";
				echo " <div>";
				echo " <label>E-mail</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['email']."</b>";
				echo "</div> ";
				echo "<hr /> ";
				echo "<br /> ";
				echo "</div> ";
				echo "<br /> ";
				echo " <div class='edit-info'>";
				echo " <a href ='edit_profile.php?user_id=$id'><button>Edit Profile</button></a>";
				echo "</div> ";
				echo "<br /> ";
				echo "<br /> ";
			}
			?>

		</div>

		</div>

</body>

</html>
