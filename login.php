<!-- Fidelis Baptista Evalino Pollo
20101114 -->

<?php session_start(); ?>
<html>

<head>
	<title>Login</title>
	<link href="css/login-style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="login-container">
		<?php
		include("connection.php");

		if (isset($_POST['submit'])) {
			$user = mysqli_real_escape_string($mysqli, $_POST['username']);
			$pass = mysqli_real_escape_string($mysqli, $_POST['password']);

			if ($user == "" || $pass == "") {
				echo "Either username or password field is empty.";
				echo "<br/>";
				echo "<a href='login.php'>Go back</a>";
			} else {
				$result = mysqli_query($mysqli, "SELECT * FROM login WHERE username='$user' AND password=md5('$pass')")
					or die("Could not execute the select query.");

				$row = mysqli_fetch_assoc($result);

				if (is_array($row) && !empty($row)) {
					$validuser = $row['username'];
					$_SESSION['valid'] = $validuser;
					$_SESSION['name'] = $row['name'];
					$_SESSION['id'] = $row['id'];
				} else {
					echo "Invalid username or password.";
					echo "<br/>";
					echo "<a href='login.php'>Go back</a>";
				}

				if (isset($_SESSION['valid'])) {
					header('Location: index.php');
				}
			}
		} else {
		?>
			<form name="form1" method="post" action="">
				<div class="box">
					<h1>Login</h1>

					<input type="text" name="username" class="email" placeholder="Username" required />

					<input type="password" name="password" class="email" placeholder="Password" required />

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