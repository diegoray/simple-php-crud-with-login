<!-- Fidelis Baptista Evalino Pollo
20101114 -->

<?php session_start(); ?>

<?php
if (!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
include("connection.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM products WHERE id=$id");

header("Location:index.php");
?>