<?php 

?>

<div class="container-fluid">
	
	<div class="row">
	<div class="col-lg-12">
			<button class="btn btn-primary float-right btn-sm" id="new_user">New user</button>
	</div>
	</div>
	<br>
	<div class="row">
		<div class="card col-lg-12">
			<div class="card-body">
				<table class="table-striped table-bordered col-md-12" id="users">
			<thead>
				<tr>
					<th class="text-center">#</th>
					<th class="text-center">Name</th>
					<th class="text-center">Username</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
 					include 'connect.php';
 					$users = $conn->query("SELECT * FROM users order by name asc");
 					$i = 1;
 					while($row= $users->fetch_assoc()):
				 ?>
				 <tr>
				 	<td>
				 		<?php echo $i++ ?>
				 	</td>
				 	<td>
				 		<?php echo $row['name'] ?>
				 	</td>
				 	<td>
				 		<?php echo $row['username'] ?>
				 	</td>
                     <td class="text-center">
                        <button type="button" class="btn btn-outline-primary btn-md edit_user" data-id="<?php echo $row['id'] ?>">Edit</button>
                        <button type="button" class="btn btn-outline-danger btn-md delete_user" data-id="<?php echo $row['id'] ?>">Delete</button>
                    </td>
				 </tr>
				<?php endwhile; ?>
			</tbody>
		</table>
			</div>
		</div>
	</div>

</div>
<script>
	
	$('#new_user').click(function(){
		uni_modal('New User','manage_user.php')
	})
	$('.edit_user').click(function(){
		uni_modal('Edit User','manage_user.php?id='+$(this).attr('data-id'))
	})
	$('.delete_user').click(function(){
		_conf("Are you sure you want to delete this user?","delete_user",[$(this).attr('data-id')])
	})
	$('#users').dataTable()
	function delete_user($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_user',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>