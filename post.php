<?php
	include('includes/database.php');
	include('session.php');

							if (isset($_FILES['image']['tmp_name']) and isset($_FILES['doc']['tmp_name'])) {
								$file=$_FILES['image']['tmp_name'];
								$image = $_FILES["image"] ["name"];
								$image_name= addslashes($_FILES['image']['name']);
								$size = $_FILES["image"] ["size"];
								$error = $_FILES["image"] ["error"];

								$file1=$_FILES['doc']['tmp_name'];
								$image1 = $_FILES["doc"] ["name"];
								$image_name1= addslashes($_FILES['doc']['name']);
								$size1 = $_FILES["doc"] ["size"];
								$error1 = $_FILES["doc"] ["error"];

								if ($error > 0 or $error1 > 0){
									echo '<script>alert("Whoops,\nYou need to choose the COVER PICTURE and FILE TO CONTRIBUTE to proceed.");window.location.href="home.php";</script>';
								}else{
									if($size > 10000000 or $size > 10000000) //conditions for the file
									{
										echo '<script>alert("Whoops,\nFile size is too big.");window.location.href="home.php";</script>';
									}

									else {
										move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/pic/" . $_FILES["image"]["name"]);
										move_uploaded_file($_FILES["doc"]["tmp_name"],"uploads/doc/" . $_FILES["doc"]["name"]);
										$location="uploads/pic/" . $_FILES["image"]["name"];
										$location1="uploads/doc/" . $_FILES["doc"]["name"];
										$user=$_SESSION['id'];
										$content=$_POST['content'];
										$time=time();

										$update=mysqli_query($conn, " INSERT INTO post (user_id,post_image,doc_file,content,created)
										VALUES ('$id','$location', '$location1', '$content','$time') ") or die (mysqli_error());

									}
										header('location:home.php');


								}
							}
?>
