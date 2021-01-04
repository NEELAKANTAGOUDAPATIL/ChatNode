<?php
  include('time_stamp.php');
	include("database.php");
			$query=mysqli_query($conn, "SELECT * from post LEFT JOIN user on user.user_id = post.user_id order by post_id DESC");
			while($row=mysqli_fetch_array($query)){
				$posted_by = $row['firstname']." ".$row['lastname'];
				$location = $row['post_image'];
				$profile_picture = $row['profile_picture'];
				$content=$row['content'];
				$post_id = $row['post_id'];
        $post_user_id = $row['user_id'];
				$time=$row['created'];
?>
		<div id="right-nav1">
			<div class="profile-pics">
			<img src="<?php echo $profile_picture ?>">
			<b><?php echo $posted_by ?></b>
			<strong><?php echo $time = time_stamp($time); ?></strong>
			</div>
		<br />
			<div class="post-content">
        <?php if ($post_user_id == $id) { ?>
				<div class="delete-post">
				      <a href="delete_post.php<?php echo '?id='.$post_id; ?>" title="Delete your post"><button class="btn-delete">X</button></a>
				</div>
      <?php } ?>
			<p><?php echo $row['content']; ?></p>
		<center>
			<img src="<?php echo $location ?>">
		</center>
		</div>

<?php
	include("includes/database.php");
			$comment=mysqli_query($conn, "SELECT * from comments where post_id='$post_id' order by post_id DESC");
			while($row=mysqli_fetch_array($comment)){
			$comment_id=$row['comment_id'];
			$content_comment=$row['content_comment'];
				$time=$row['created'];
			$post_id=$row['post_id'];
      $comment_user_id = $row['user_id'];
			$user=$_SESSION['id'];

?>
			<div class="comment-display"<?php echo $comment_id ?>>
        <?php if ($comment_user_id == $id) { ?>
					<div class="delete-post">
					       <a href="delete_comment.php<?php echo '?id='.$comment_id; ?>" title="Delete your comment"><button class="btn-delete">X</button></a>
					</div>
        <?php } ?>
				<div class="user-comment-name"><img src="<?php echo $row['image']; ?>">&nbsp;&nbsp;&nbsp;<?php echo $row['name']; ?><strong class="time-comment"><?php echo $time = time_stamp($time); ?></strong></div>
				<div class="comment"><?php echo $row['content_comment']; ?></div>

			</div>
			<br />

<?php
}
?>


		 <form  method="POST" action="comment.php">
			<div class="comment-area">

						<?php $image=mysqli_query($conn, "select * from user where user_id='$id'");
							while($row=mysqli_fetch_array($image)){


							?>
						<img src="<?php echo $row['profile_picture']; ?>" width="50" height="50">
						<?php } ?>

			<input type="text" name="content_comment" placeholder="Write a comment..." class="comment-text">
			<input type="hidden" name="post_id" value="<?php echo $post_id ?>">
			<input type="hidden" name="user_id" value="<?php echo $firstname . ' ' . $lastname  ?>">
			<input type="hidden" name="image" value="<?php echo $profile_picture  ?>">
			<input type="submit" name="post_comment" value="Send" class="btn-comment">

			</div>
		</form>


		</div>
	<?php
	}
	?>
