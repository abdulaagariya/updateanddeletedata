<?php
include ('connection.php');
$id = $_GET['id'];
$sql ="DELETE FROM `rag` WHERE id='$id'";
$data = mysqli_query($con,$sql);
if ($data) {
	echo "deleted";
	header('location:show.php');
}else
{
	echo "error";
}
 ?>