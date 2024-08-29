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
	
	<form action="sinhvien_add_post.php" method="POST">
		<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Thêm sinh viên</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
					  <label for="masv">Mã sinh viên:</label>
					  <input type="text" class="form-control" name="masv" id="masv"/>
					</div>
					<div class="form-group">
					  <label for="hoten">Tên sinh viên:</label>
					  <input type="text" class="form-control" id="hoten" name="hoten"/>
					</div>
					<div class="form-group">
					  <label for="namsinh">Năm sinh:</label>
					  <input type="number" class="form-control" name="namsinh" id="namsinh"/>
					</div>
					<div class="form-group">
					  <label for="dantoc">Dân tộc:</label>
					  <input type="text" class="form-control" name="dantoc" id="dantoc"/>
					</div>
					<div class="form-group">
					  <label for="malop">Mã lớp:</label>
					  <input type="text" class="form-control" name="malop" id="malop"/>
					</div>
					<button class="btn btn-success" >Lưu </button>
				</form>
			</div>
		</div>
		</div>
	</form>		
	
</body>
</html>