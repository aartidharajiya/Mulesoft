<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Task</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<script type="text/javascript" src="jquery.min.js"></script>
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
			</div>
			<div class="col-lg-6 pt-5">
				<form id="reg" action="manage.php" method="post">
					<legend>Add Record</legend>
					<div class="form-group mb-3">
					  <label for="exampleInputEmail1">Name</label>
					  <input type="text" class="form-control" id="name" name="name" placeholder="Enetr Name" required="">
					</div>

					<div class="form-group mb-3">
					  <label for="exampleInputEmail1">Actor</label>
					  <input type="text" class="form-control" id="actor" required="" placeholder="Enter Actor Name" name="actor">
					</div>

					<div class="form-group mb-3">
					  <label for="exampleInputPassword1">Actress</label>
					  <input type="text" name="actress" class="form-control" id="actress" placeholder="Enter Actress Name" required="">
					</div>

					<div class="form-group mb-3">
					  <label for="exampleInputPassword1">Director</label>
					  <input type="text" name="director" class="form-control" id="director" placeholder="Enter Director Name" required="">
					</div>

					<div class="form-group mb-5">
					  <label for="exampleInputPassword1">Release Date</label>
					  <input type="month" class="form-control" name="date" id="date" required="">
					</div>
					<button type="submit" id="submitbtn" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>