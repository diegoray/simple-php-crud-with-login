<!-- Fidelis Baptista Evalino Pollo
20101114 -->

<html>

<head>
	<title>Register</title>
	<link href="css/login-style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="login-container">
		<?php
		include("connection.php");

		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$user = $_POST['username'];
			$pass = $_POST['password'];

			if ($user == "" || $pass == "" || $name == "" || $email == "") {
				echo "<script>alert('Ups.. Seluruh Field Harus Diisi');window.location.href='register.php';</script>";
			} else {
				mysqli_query($mysqli, "INSERT INTO login(name, email, username, password) VALUES('$name', '$email', '$user', md5('$pass'))")
					or die("Could not execute the insert query.");

				header("Location: login.php");
			}
		} else {
		?>
			<form name="form1" method="post" action="">
				<div class="box">
					<h1>Register</h1>

					<input type="text" name="name" class="email" placeholder="Full Name" />
					<input type="email" name="email" class="email" placeholder="Email" />
					<input type="text" name="username" class="email" placeholder="Username" />
					<input type="password" name="password" class="email" placeholder="Password" />
					<input type="submit" name="submit" value="Submit" class="btn">
					<a href="index.php" class="btn">Back home</a>
				</div>
			</form>
		<?php
		}
		?>
	</div>
</body>

</html>