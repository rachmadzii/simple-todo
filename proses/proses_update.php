<?php
include '../connection.php';

$id = $_POST['id'];
$task = $_POST['task'];
$date = $_POST['date'];

$query = mysqli_query($connect, "UPDATE list SET task = '$task', date = '$date' WHERE id = $id");

if($query) {
	echo "<script> window.alert('Success update task!'); 
	window.location.href='../index.php'; </script>";
}
else {
	echo "<script> window.alert('Failed!'); 
	window.location.href='../index.php'; </script>";
}
?>