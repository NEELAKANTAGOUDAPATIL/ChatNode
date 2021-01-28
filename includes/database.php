<?php
	$conn = mysqli_connect('localhost', 'root', '','chatnode');
	if (!$conn) {
	 	echo "Connection error: " . msqli_connect_error();
 	}
	date_default_timezone_set('Asia/Kolkata');
?>
