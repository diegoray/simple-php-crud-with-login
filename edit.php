<!-- Fidelis Baptista Evalino Pollo
20101114 -->

<?php session_start(); ?>

<?php
if (!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
include_once("connection.php");

if (isset($_POST['update'])) {
	$id = $_POST['id'];

	$name = $_POST['name'];
	$qty = $_POST['qty'];
	$price = $_POST['price'];

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
	} else {
		$result = mysqli_query($mysqli, "UPDATE products SET name='$name', qty='$qty', price='$price' WHERE id=$id");

		header("Location: index.php");
	}
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM products WHERE id=$id");

while ($res = mysqli_fetch_array($result)) {
	$name = $res['name'];
	$qty = $res['qty'];
	$price = $res['price'];
}
?>
<html>

<head>
	<title>Edit Data</title>
	<link href="css/edit-style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php include("navbar.php"); ?>
	<div class="edit-container">
		<h1>Ubah Data</h1>
		<form name="form1" method="post" action="edit.php" id="form" class="validate">
			<div class="form-field">
				<label for="full-name">Nama</label>
				<input type="text" name="name" id="full-name" value="<?php echo $name; ?>" required />
			</div>
			<div class="form-field">
				<label for="email-input">Quantity</label>
				<input type="text" name="qty" id="email-input" value="<?php echo $qty; ?>" required />
			</div>
			<div class="form-field">
				<label for="password-input">Harga</label>
				<input type="text" name="price" id="password-input" value="<?php echo $price; ?>" required />
			</div>
			<div class="form-field">
				<label for=""></label>
				<input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
				<input type="submit" name="update" value="Update" />
			</div>
		</form>
	</div>
</body>

</html>