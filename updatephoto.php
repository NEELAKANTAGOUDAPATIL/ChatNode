<!DOCTYPE html>
<html>

	<head>
		<title>Welcome  To Biobook - Sin up, Log in, Chat </title>
		<link rel="stylesheet" type="text/css" href="css/home.css">

		<!-- Favicons -->
	  <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
	  <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
	  <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
	  <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
	  <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
	  <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
	  <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
	  <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
	  <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
	  <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
	  <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
	  <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
	  <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
	  <link rel="manifest" href="assets/favicon/manifest.json">
	  <meta name="msapplication-TileColor" content="#ffffff">
	  <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
	  <meta name="theme-color" content="#ffffff">

	</head>

<body>
<?php include ('session.php');?>


<form method="post" enctype="multipart/form-data">
<input type="file" name="image">
<input type="submit" value="save" name="image" />
<?php
							include ('includes/database.php');

							if (!isset($_FILES['image']['tmp_name'])) {
							echo "";
							}else{
							$file=$_FILES['image']['tmp_name'];
							$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];
							$error = $_FILES["image"] ["error"];

							if ($error > 0){
										die("Error uploading file! Code $error.");
									}else{
										if($size > 10000000) //conditions for the file
										{
										die("Format is not allowed or file size is too big!");
										}

									else
										{

									move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);
									$location="uploads/" . $_FILES["image"]["name"];
									$user=$_SESSION['id'];
									$update=mysqli_query($conn, "UPDATE user SET profile_picture = '$location' WHERE user_id='$user'");

									$update1=mysqli_query($conn, "UPDATE comments SET image = '$location' WHERE user_id='$user'");

									}
										header('location:home.php');


									}
							}
						?>
						</form>

</body>

</html>
