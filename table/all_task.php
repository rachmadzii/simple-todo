<div class='table-list'>
	<center><h5>All Task</h5></center>
	<table class='table table-hover table-bordered'>
		<thead>
			<tr>
				<th>#</th>
				<th>Task</th>
				<th><center>Date</center></th>
				<th><center>Status</center></th>
				<th><center>Action<center></th>
				</tr>
			</thead>
			<tbody>
				<?php
				$query = mysqli_query($connect, "SELECT * FROM list");
				$row_data = mysqli_num_rows($query);

				if($row_data < 1){
					echo "<td colspan='5'><center>No Tasks</center></td>";
				}

				while($data = mysqli_fetch_array($query)) {
					$id = $data['id'];
					$task = $data['task'];
					$date = $data['date'];
					$status = $data['status'] ? "Completed" : "Not Completed";

					echo "	
					<tr>
					<th>".$id."</th>
					<td>".$task."</td>
					<td><center>".date("d/m/Y", strtotime($date))."</center></td>
					<td><center>".$status."</center></td>
					<td>
					<center>";
					
					if($status == 'Not Completed') {
						echo "<a href='proses/proses_checklist.php?id=$id' class='btn small-btn'>
							<i class='fa fa-check-square-o fa-lg'></i>
							</a>";
					}

					echo "
					<a href='page/update_task.php?id=$id' class='btn small-btn'>
					<i class='fa fa-pencil-square-o fa-lg'></i>
					</a>
					<a href='proses/proses_delete.php?id=$id' class='btn small-btn delete'>
					<i class='fa fa-trash-o fa-lg'></i>
					</a>
					</center>
					</td>
					</tr>";
				}				
				?>
			</tbody>
		</table>
	</div>