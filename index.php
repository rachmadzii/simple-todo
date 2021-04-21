<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css' rel='stylesheet'>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
	<link rel='stylesheet' href='css/styles.css'>
</head>
<body>	
	<center>
		<img src='img/logo.png' class='logo'>
		<h4>TODO-LIST</h4>
	</center>
	<div class='container'>
		<div class='row'>
			<div class='col-md-3'>
				<form method='POST'>
					<select name='show' class='form-control filter-select'>
						<option value='#'>Filter</option>
						<option value='all'>Show all</option>
						<option value='complete'>Completed Task</option>
						<option value='not-yet'>Not Completed Task</option>
					</select>
				</div>
				<div class='col-md-6'>
					<button name='filter' class='btn filter-btn'>
						<i class='fa fa-search'></i>
					</button>
				</form>
			</div>
			<div class='col-md-2'>
				<form action='page/add_task.php'>
					<button class='btn add-btn'>
						<i class='fa fa-plus icon'></i>Add Task
					</button>
				</form>
			</div>
		</div>
	</div>
</body>	
</html>

<?php
include 'connection.php';

if(isset($_POST['filter'])){
	$show = $_POST['show'];

	if($show == 'all'){
		include 'table/all_task.php';
	}
	elseif($show == 'complete'){
		include 'table/completed_task.php';
	}
	elseif($show == 'not-yet'){
		include 'table/uncompleted_task.php';
	}
}
?>