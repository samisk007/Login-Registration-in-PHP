<?php
	include 'include/header.php';
	include 'library/user.php';
	$user = new User();

?>

		 <div class="panel panel-default">

		 		<div class = "panel-heading"> 
		 					<h2> User list <span class = "pull-right"> <strong> Welcome! </strong> Samiul </span></h2>
		 		</div>

		 			<div class = "panel-body"> 
		 				<table class = "table table-strip">
		 						<th width = 20%> Serial </th>
		 						<th width = 20%> Name </th>
		 						<th width = 20%> Username </th>
		 						<th width = 20%> Email Address </th>
		 						<th width = 20%> Action </th>
		 						
		 						<tr>
		 							<td> 01 </td>
		 							<td> Sheikh </td>
		 							<td> admin </td>
		 							<td> admin@gmail.com </td>
		 							<td>
		 								<a class="btn btn-primary" href="profile.php?id=1"> View </a>
		 								
		 							</td>
		 						</tr>




		 						<tr>
		 							<td> 02 </td>
		 							<td> samiul </td>
		 							<td> sami </td>
		 							<td> sami@gmail.com </td>
		 							<td>
		 								<a class="btn btn-primary" href="profile.php?id=1"> View </a>
		 								
		 							</td>
		 						</tr>

		 				</table>

		 			</div>

		 </div>


<?php include 'include/footer.php'; ?>
			 			