<!-- Fidelis Baptista Evalino Pollo
20101114 -->

<?php session_start(); ?>

<?php
if (!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<html>

<head>
	<title>Add Data</title>
</head>

<body>
	<?php
	include_once("connection.php");

	if (isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$qty = $_POST['qty'];
		$price = $_POST['price'];
		$loginId = $_SESSION['id'];

		if (empty($name) || empty($qty) || empty($price)) {

			if (empty($name)) {
				echo "<font color='red'>Name field is empty.</font><br/>";
			}

			if (empty($qty)) {
				echo "<font color='red'>Quantity field is empty.</font><br/>";
			}

			if (empty($price)) {
				echo "<font color='red'>Price field is empty.</font><br/>";
			}

			echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		} else {
			$result = mysqli_query($mysqli, "INSERT INTO products(name, qty, price, login_id) VALUES('$name','$qty','$price', '$loginId')");

			header('Location: index.php');
		}
	}
	?>
</body>

</html>