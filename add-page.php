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
	<link href="css/edit-style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php include("navbar.php"); ?>

	<div class="edit-container">
		<h1>Tambah Data</h1>
		<form name="form1" method="post" action="add.php" id="form" class="validate">
			<div class="form-field">
				<label for="full-name">Nama</label>
				<input type="text" name="name" id="full-name" required />
			</div>
			<div class="form-field">
				<label for="email-input">Quantity</label>
				<input type="text" name="qty" id="email-input" required />
			</div>
			<div class="form-field">
				<label for="password-input">Harga</label>
				<input type="text" name="price" id="password-input" required />
			</div>
			<div class="form-field">
				<label for=""></label>
				<input type="submit" name="Submit" value="Add" />
			</div>
		</form>
	</div>
</body>

</html>