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
	
	<form action="giangkhoa_add_post.php" method="POST">
		<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Thêm giảng khoa</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
					  <label for="mact">Mã chương trình:</label>
					  <input type="text" class="form-control" name="mact" id="mact"/>
					</div>
					<div class="form-group">
					  <label for="makhoa">Mã khoa:</label>
					  <input type="text" class="form-control" id="makhoa" name="makhoa"/>
					</div>
					<div class="form-group">
					  <label for="mamh">Mã môn học:</label>
					  <input type="text" class="form-control" name="mamh" id="mamh"/>
					</div>
					<div class="form-group">
					  <label for="namhoc">Năm học:</label>
					  <input type="number" class="form-control" id="namhoc" name="namhoc"/>
					</div>
					<div class="form-group">
					  <label for="hocky">Học kỳ:</label>
					  <input type="number" class="form-control" name="hocky" id="hocky"/>
					</div>
					<div class="form-group">
					  <label for="stlt">Tiết lý thuyết:</label>
					  <input type="number" class="form-control" name="stlt" id="stlt"/>
					</div>
					<div class="form-group">
					  <label for="stth">Tiết thực hành:</label>
					  <input type="number" class="form-control" name="stth" id="stth"/>
					</div>
					<div class="form-group">
					  <label for="sotinchi">Số tín chỉ:</label>
					  <input type="number" class="form-control" name="sotinchi" id="sotinchi"/>
					</div>
					<button class="btn btn-success" >Lưu</button>
				</form>
			</div>
		</div>
		</div>
	</form>		
	
</body>
</html>