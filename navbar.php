<!-- Fidelis Baptista Evalino Pollo
20101114 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/navbar-style.css" rel="stylesheet" type="text/css">
    <title>Navbar</title>
</head>

<body>
    <div class="box-area">
        <header>
            <div class="wrapper">
                <div class="logo">
                    <a href="index.php">SICATAT</a>
                </div>
                <nav>
                    <?php
                    if (isset($_SESSION['valid'])) {
                    ?>
                        <a href="index.php">Home
                            <a href="logout.php">Logout</a>
                        <?php
                    } else {
                        ?>
                            <a href="index.php">Home</a>
                            <a href="login.php">Login</a>
                            <a href="register.php">Register</a>
                        <?php
                    }
                        ?>
                </nav>
            </div>
        </header>
    </div>

</body>

</html>