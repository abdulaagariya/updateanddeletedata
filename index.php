<!DOCTYPE html>
<html>
<head>
	<title>insert</title>
</head>
<body>
<div class="row text-center">
	<div class="container">
		<h1>Insert DATA</h1>
	<form action="index.php" method="post">
	<input type="text" name="firstname" placeholder="firstname"><br><br>
	<input type="text" name="lastname" placeholder="lastname"><br><br>
	<input type="gmail" name="gmail" placeholder="gmail"><br><br>
	<input type="text" name="number" placeholder="number"><br><br>
	<input type="text" name="address" placeholder="address"><br><br>
	<input type="submit" name="submit" value="insert"><br><br>
	</form>
<button><a href="show.php">show data</a></button>
	</div>
</div>
</body>
</html>
<?php
error_reporting(0);
include 'connection.php';
if (isset($_POST['submit'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$gmail = $_POST['gmail'];
	$number = $_POST['number'];
	$address = $_POST['address'];
	$sql = "INSERT INTO `rag` VALUES ('$id','$firstname','$lastname','$gmail','$number','$address')";
	$data=mysqli_query($con,$sql);
	if ($data) {
		echo "insert";
	}else
	{
		echo "sorry";
	}
}
?>