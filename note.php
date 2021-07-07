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