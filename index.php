<?php session_start(); ?>

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
	<?php include("navbar.php"); ?>

	<div class="container">
		<a href="add-page.php" class="btn">Tambah Data</a>
		<table>
			<thead>
				<tr>
					<th>Nama</th>
					<th>Quantity</th>
					<th>Harga</th>
					<?php
					if (isset($_SESSION['valid'])) {
						echo "<th>Action</th>";
					}
					?>
				</tr>
			</thead>
			<?php
			while ($res = mysqli_fetch_array($product)) {
				echo "<tr>";
				echo "<td>" . $res['name'] . "</td>";
				echo "<td>" . $res['qty'] . "</td>";
				echo "<td>" . $res['price'] . "</td>";

				if (isset($_SESSION['valid'])) {
					echo "<td><a href=\"edit.php?id=$res[id]\" class=\"btn\" >Edit</a><a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\" class=\"btn\">Delete</a></td>";
				}
			}
			?>
		</table>
	</div>
</body>

</html>