<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="navbar-style.css" rel="stylesheet" type="text/css">
    <title>Navbar</title>
</head>

<body>
    <?php
    if (isset($_SESSION['valid'])) {
    ?>
        <header>
            <div class="nav">
                <ul>
                    <li class="home"><a href="index.php">Home</a></li>
                    <li class="news"><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </header>
    <?php
    } else {
    ?>
        <header>
            <div class="nav">
                <ul>
                    <li class="home"><a href="index.php">Home</a></li>
                    <li class="tutorials"><a href="login.php">Login</a></li>
                    <li class="about"><a href="register.php">Register</a></li>
                </ul>
            </div>
        </header>
    <?php
    }
    ?>

</body>

</html>