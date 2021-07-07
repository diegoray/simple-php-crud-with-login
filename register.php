<html>

<head>
	<title>Register</title>
	<link href="login-style.css" rel="stylesheet" type="text/css">
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
				echo "All fields should be filled. Either one or many fields are empty.";
				echo "<br/>";
				echo "<a href='register.php'>Go back</a>";
			} else {
				mysqli_query($mysqli, "INSERT INTO login(name, email, username, password) VALUES('$name', '$email', '$user', md5('$pass'))")
					or die("Could not execute the insert query.");

				echo "Registration successfully";
				echo "<br/>";
				echo "<a href='login.php'>Login</a>";
			}
		} else {
		?>
			<!-- <p><font size="+2">Register</font></p>
	<form name="form1" method="post" action="">
		<table width="75%" border="0">
			<tr> 
				<td width="10%">Full Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>			
			<tr> 
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr> 
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form> -->
			<form name="form1" method="post" action="">
				<div class="box">
					<h1>Register</h1>

					<input type="text" name="name" class="email" placeholder="Full Name" />
					<input type="email" name="email" class="email" placeholder="Email" />
					<input type="text" name="username" class="email" placeholder="Username" />
					<input type="password" name="password" class="email" placeholder="Password" />
					<input type="submit" name="submit" value="Submit" class="btn">
					<a href="index.php" class="btn">Back home</a>

				</div> <!-- End Box -->

			</form>
		<?php
		}
		?>
	</div>
</body>

</html>