<?php
include '../connection.php';

$id = $_GET['id'];
$query = mysqli_query($connect, "SELECT * FROM list WHERE id = $id");
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/styles.css">
</head>
<body>	
	<center>
		<img src='../img/logo.png' class='logo'>
		<h4>TODO-LIST</h4>
	</center>
	<div class="form-add">
		<form method="POST" action="../proses/proses_update.php">
			<h5><i class="fa fa-plus-square icon"></i>Add New Task</h5><hr>
			<label class="form-label">Task</label>
			<input type="text" name="task" class="form-control" value="<?php echo $data['task']?>">
			<label class="form-label">Date</label>
			<input type="date" name="date" class="form-control" value="<?php echo $data['date']?>">
			<button name="id" value="<?php echo $data['id']?>" class="btn submit-btn">
				<i class="fa fa-check icon"></i>Submit
			</button>
		</form>
	</div>
</body>	
</html>
