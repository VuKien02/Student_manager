<?php
	include('../connect.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registation Form * Form Tutorial</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	
	<form action="khoa_add_post.php" method="POST">
		<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Thêm khoa</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
					  <label for="makhoa">Mã Khoa:</label>
					  <input type="text" class="form-control" name="makhoa" id="makhoa"/>
					</div>
					<div class="form-group">
					  <label for="tenkhoa">Tên Khoa:</label>
					  <input type="text" class="form-control" id="tenkhoa" name="tenkhoa"/>
					</div>
					<div class="form-group">
					  <label for="nam">Năm Thành Lập:</label>
					  <input type="number" class="form-control" id="nam" name="nam"/>
					</div>
					<button class="btn btn-success" >Lưu</button>
				</form>
			</div>
		</div>
		</div>
	</form>		
	
</body>
</html>