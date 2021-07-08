<?php
if (!isset($_SESSION['valid'])) {
    header('Location: login.php');
}
?>

Fidelis Baptista Evalino Pollo
20101114

dari edit

<a href="index.php">Home</a> | <a href="view.php">View Products</a> | <a href="logout.php">Logout</a>
<br /><br />

<form name="form1" method="post" action="edit.php">
    <table border="0">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
        </tr>
        <tr>
            <td>Quantity</td>
            <td><input type="text" name="qty" value="<?php echo $qty; ?>"></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type="text" name="price" value="<?php echo $price; ?>"></td>
        </tr>
        <tr>
            <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
            <td><input type="submit" name="update" value="Update"></td>
        </tr>
    </table>
</form>

dari add

<a href="index.php">Home</a> | <a href="view.php">View Products</a> | <a href="logout.php">Logout</a>
<br /><br />

<form action="add.php" method="post" name="form1">
    <table width="25%" border="0">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Quantity</td>
            <td><input type="text" name="qty"></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type="text" name="price"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="Submit" value="Add"></td>
        </tr>
    </table>
</form>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Fixed Header with html and css | Collapsing Header Tutorial</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="box-area">
        <header>
            <div class="wrapper">
                <div class="logo">
                    <a href="#">MouriThemes</a>
                </div>
                <nav>
                    <a href="#">home</a> <a href="#">about</a> <a href="#">portfolio</a> <a href="#">services</a> <a href="#">contact</a>
                </nav>
            </div>
        </header>
    </div>
</body>

</html>