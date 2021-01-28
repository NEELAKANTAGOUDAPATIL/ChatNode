<?php
  include 'includes/header.php';
  include('includes/database.php');

  $p_id = $_GET['pid'];
  $u_id = $_GET['uid'];

	// sending query
	$result = mysqli_query($conn, "SELECT * FROM user where user_id='$id'");
  while($row = mysqli_fetch_array($result))
  {
    $credits = $row['credits'];
  }
  if($credits > 0){
    $user = mysqli_query($conn, "SELECT * FROM user where user_id='$u_id'");
    while($row = mysqli_fetch_array($user))
    {
      $u_credits = $row['credits'];
    }
    $f_credit = $credits - 1;
    $t_credit = $u_credits + 1;
    mysqli_query($conn, "UPDATE user SET credits ='$f_credit' WHERE user_id = '$id'")
  				or die(mysqli_error());
    mysqli_query($conn, "UPDATE user SET credits ='$t_credit' WHERE user_id = '$u_id'")
  				or die(mysqli_error());
    mysqli_query($conn, "INSERT INTO transaction (from_id,to_id,post_id)
    VALUES ('$id','$u_id', '$p_id') ") or die (mysqli_error());

  	echo '<script>alert("Hooray!\n\nYou have done your contribution successfully.\nYou can see all your contributed posts in Paid Posts section.\n\n\tClick OK to redirect...");window.location.href="paid_posts.php";</script>';
  }
  else {
    echo '<script>alert("Sorry, you don\'t have sufficiant credits!\nContribute to get credits.");window.location.href="home.php";</script>';
  }
?>
