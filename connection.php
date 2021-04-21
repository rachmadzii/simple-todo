<?php
$connect = mysqli_connect("localhost","root","","todo_db");

if(!$connect) {
	die("Failed to connect to MySQL : ".mysqli_connect_error());
}
?>