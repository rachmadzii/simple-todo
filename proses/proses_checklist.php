<?php
include '../connection.php';

$id = $_GET['id'];

$query = mysqli_query($connect, "UPDATE list SET status = 1 WHERE id = $id");

if($query) {
	echo "<script> window.alert('Task complete!'); 
	window.location.href='../index.php'; </script>";
}
else {
	echo "<script> window.alert('Failed!'); 
	window.location.href='../index.php'; </script>";
}
?>