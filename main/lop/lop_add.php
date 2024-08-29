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
	
	<form action="lop_add_post.php" method="POST">
		<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Thêm lớp học</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
					  <label for="malop">Mã lớp:</label>
					  <input type="text" class="form-control" name="malop" id="malop"/>
					</div>
					<div class="form-group">
					  <label for="makhoa">Mã khoa:</label>
					  <input type="text" class="form-control" id="makhoa" name="makhoa"/>
					</div>
					<div class="form-group">
					  <label for="makhoahoc">Mã khoa học:</label>
					  <input type="text" class="form-control" name="makhoahoc" id="makhoahoc"/>
					</div>
					<div class="form-group">
					  <label for="mact">Mã chương trình:</label>
					  <input type="text" class="form-control" name="mact" id="mact"/>
					</div>
					<div class="form-group">
					  <label for="stt">STT:</label>
					  <input type="number" class="form-control" name="stt" id="stt"/>
					</div>
					<button class="btn btn-success" >Lưu </button>
				</form>
			</div>
		</div>
		</div>
	</form>		
	
</body>
</html>