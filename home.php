<?php include 'includes/header.php' ?>
	<div id="container">

		<div id="left-nav2">
			<div class="clip2">
			  <a href="updatephoto.php" title="Change Profile Picture"><img src="<?php echo $row['profile_picture'] ?>"></a>
			</div>
			<div class="user-details2">
				<h2><?php echo $username ?></h2>
			</div>
		</div>
    <?php
    	include("includes/database.php");
    			$query=mysqli_query($conn,"SELECT * from user where user_id='$id' order by user_id DESC");
    			while($row=mysqli_fetch_array($query)){
    				$id = $row['user_id'];
    ?>
    		<div id="left-nav1">
    			<h2>Personal Info</h2>
    			<table>
    				<tr>
    					<td><label>Firstname</label></td>
    					<td width="20"></td>
    					<td><b><?php echo $row['firstname']; ?></b></td>
    				</tr>
            <tr>
    					<td><label>Lastname</label></td>
    					<td width="20"></td>
    					<td><b><?php echo $row['lastname']; ?></b></td>
    				</tr>
    				<tr>
    					<td><label>Birthday</label></td>
    					<td width="20"></td>
    					<td><b><?php echo $row['birthday']; ?></b></td>
    				</tr>
    				<tr>
    					<td><label>Gender</label></td>
    					<td width="20"></td>
    					<td><b><?php echo $row['gender']; ?></b></td>
    				</tr>
    				<tr>
    					<td><label>Contact</label></td>
    					<td width="20"></td>
    					<td><b><?php echo $row['number']; ?></b></td>
    				</tr>
    				<tr>
    					<td><label>Email</label></td>
    					<td width="20"></td>
    					<td><b><?php echo $row['email']; ?></b></td>
    				</tr>
    				<!-- <tr>
    					<td><label>Image</label></td>
    					<td width="20"></td>
    					<td><img src="<?php //echo $row['profile_picture']; ?>"></td>
    				</tr> -->
    			</table>
    		</div>
    <?php
    }
    ?>

		<div id="right-nav">
			<h1>Update Status</h1>
    	<div>
  			<form method="post" action="post.php" enctype="multipart/form-data">
  				<textarea placeholder="Whats on your mind?" name="content" class="post-text" required></textarea>
  				<input style="margin-left:20px;" type="file" name="image">
  				<button style="margin-right:20px;" class="btn-share" name="Submit">Post</button>
  			</form>
    	</div>
		</div>
<div id="div_refresh"></div>



	</div>

</body>

</html>
