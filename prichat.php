<ol><?php
include("includes/database.php");
$sql="SELECT * FROM user";
$result=$conn->qurey($sql);
while($root=fetch_assoc($result))
{
	echo'<li><a href="chatstart.php?user_id='.$user_id["user_id"].'">'.$user["firstname"].'</a>
		</li>
		';

} ?>
</ol>