<?php
include '../connection.php';

$task = $_POST['task'];
$date = $_POST['date'];

$query = mysqli_query($connect, "INSERT INTO list (task, date, status) VALUES ('$task', '$date', 0)");

if($query) {
	echo "<script> window.alert('Success add task!'); 
	window.location.href='../index.php'; </script>";
}
else {
	echo "<script> window.alert('Failed!'); 
	window.location.href='../index.php'; </script>";
}
?>