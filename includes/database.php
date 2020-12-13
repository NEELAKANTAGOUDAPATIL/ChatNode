<?php
//mysqli_select_db('biobook',mysqli_connect('localhost','root',''))or die(mysqli_error());
?>
<?php
	$conn = mysqli_connect('localhost', 'root', '','biobook');
	if (!$conn) {
	 	echo "Connection error: " . msqli_connect_error();
 	}
?>
