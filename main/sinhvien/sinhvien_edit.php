<<?php
	include('../connect.php');

	$s_MaSV = $_GET['MaSV'];

	$sql="select * from sinhvien where MaSV = '$s_MaSV'";
	$result = mysqli_query($connect,$sql);
	$class = mysqli_fetch_array($result);
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
	<form action="sinhvien_edit_post.php" method="POST">
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Sửa thông tin sinh viên</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
					  <label for="masv">Mã sinh viên:</label>
					  <input type="text" class="form-control" name="masv" id="masv" value="<?php echo $class['MaSV']; ?>"/>
					</div>
					<div class="form-group">
					  <label for="hoten">Tên sinh viên:</label>
					  <input type="text" class="form-control" id="hoten" name="hoten" value="<?php echo $class['HoTen']; ?>"/>
					</div>
					<div class="form-group">
					  <label for="namsinh">Năm sinh:</label>
					  <input type="number" class="form-control" name="namsinh" id="namsinh" value="<?php echo $class['NamSinh']; ?>"/>
					</div>
					<div class="form-group">
					  <label for="dantoc">Dân tộc:</label>
					  <input type="text" class="form-control" name="dantoc" id="dantoc" value="<?php echo $class['DanToc']; ?>"/>
					</div>
					<div class="form-group">
					  <label for="malop">Mã lớp:</label>
					  <input type="text" class="form-control" name="malop" id="malop" value="<?php echo $class['MaLop']; ?>"/>
					</div>
					<button class="btn btn-success">Lưu</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>