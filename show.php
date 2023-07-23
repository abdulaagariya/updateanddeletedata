<!DOCTYPE html>
<html>
<head>
	<title>show table</title>
</head>
<body>
<?php
include ('connection.php');
$sql ="select * from rag";
$data =mysqli_query($con,$sql);
$total=mysqli_num_rows($data);
if ($total=mysqli_num_rows($data)) {
	?>
	<table border="2">
<tr>
<th>id</th>
<th>firstname</th>
<th>lastname</th>
<th>gmail</th>
<th>number</th>
<th>address</th>
<th>delete</th>
<th>update</th>
</tr>
	<?php
	while ($result = mysqli_fetch_array($data)) {
		echo "
			<tr>
				<td>".$result['id']."</td>
				<td>".$result['firstname']."</td>
				<td>".$result['lastname']."</td>
				<td>".$result['gmail']."</td>
				<td>".$result['number']."</td>
				<td>".$result['address']."</td>
				<td><a href='update.php?id=$result[id] & firstname=$result[firstname] & lastname=$result[lastname] & gmail=$result[gmail] & number=$result[number] &address=$result[address]'> update </a></td>
				<td><a href='delete.php?id=$result[id] '>delete </a></td>
			</tr>
		";
	}
}
else
{
 	echo "no record found";
}
?>
</table>
</body>
</html>
 <!--------- echo "<br>".$result['id']."  ".$result['firstname']." ".$result['lastname']." ".$result['gmail']."  ".$result['number']."  ".$result['address']."<br>";_----->