<?php
	$db = new mysqli("localhost","root","","movies");
	if ($db->connect_errno)
	{
		echo $db->connect_error;
		exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Task</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
</head>
<body>
	<div class="container pt-5">
		<div class="row">
			<div class="col-lg-12 pt-4">
				<h3 style="float:left">Movies Records</h3>
				<a href="add.php" style='float:right' class="btn btn-success">Add New</a>	
			</div>
			<div class="col-lg-12 pt-4">
				<table class="table table-hover">
	  				<thead>
	    				<tr class="table-active">
	    					<th>No.</th>
	      					<th>Name</th>
	      					<th>Actor</th>
	      					<th>Actress</th>
							<th>Director</th>
	      					<th>Release-Date</th>
	    				</tr>
	  				</thead>
	  				<?php
	  					$sql="select * from movie";
	  					$result = $db->query($sql);
	  					while ($row=$result->fetch_assoc())
	  					{
	  					?>
	    				<tr>
					      <td><?=$row['id'];?></a></td>
					      <td><?=$row['name'];?></td>
					      <td><?=$row['actor'];?></td>
					      <td><?=$row['actress'];?></td>
						  <td><?=$row['director'];?></td>
					      <td><?=$row['r_date'];?></td>
	    				</tr>
                        <?php } ?>
	    			</tbody>
	    		</table>
	    	</div>
	    </div>
	</div>
</body>
</html>