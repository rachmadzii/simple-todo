<?php
include '../connection.php';

$id = $_GET['id'];

$query = mysqli_query($connect, "DELETE FROM list WHERE id = $id");

if($query) {
	echo "<script> window.alert('Success delete task!'); 
	window.location.href='../index.php'; </script>";
}
else {
	echo "<script> window.alert('Failed!'); 
	window.location.href='../index.php'; </script>";
}
?>