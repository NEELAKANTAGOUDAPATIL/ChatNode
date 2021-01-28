<?php
include("includes/database.php");
session_start();
if (!isset($_SESSION['id'])){
header('location:index.php');
}

$id = $_SESSION['id'];

$query=mysqli_query($conn,"SELECT * FROM user WHERE user_id ='$id'");
$row=mysqli_fetch_array($query);
$_SESSION['credits']=$row['credits'];
$profile_picture=$row['profile_picture'];
$firstname=$row['firstname'];
$lastname=$row['lastname'];
$username=$row['username'];
?>
