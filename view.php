<?php session_start(); ?>

<?php
if (!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)
$product = mysqli_query($mysqli, "SELECT * FROM products ORDER BY id DESC");
?>

<html>

<head>
	<title>Homepage</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<a href="index.php">Home</a> | <a href="add.html">Add New Data</a> | <a href="logout.php">Logout</a>
	<br /><br />

	<table>
		<thead>
			<tr>
				<th>Nama</th>
				<th>Quantity</th>
				<th>Harga</th>
				<th>Update</th>
			</tr>
		</thead>
		<?php
		while ($res = mysqli_fetch_array($product)) {
			echo "<tr>";
			echo "<td>" . $res['name'] . "</td>";
			echo "<td>" . $res['qty'] . "</td>";
			echo "<td>" . $res['price'] . "</td>";
			echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		}
		?>
	</table>
</body>

</html>