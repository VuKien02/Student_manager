<<?php
	include('../connect.php');

	$s_MaLop = $_GET['MaLop'];

	$sql="select * from lop where MaLop = '$s_MaLop'";
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
	<form action="lop_edit_post.php" method="POST">
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Sửa thông tin chương trình học</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
					  <label for="malop">Mã lớp:</label>
					  <input type="text" class="form-control" name="malop" id="malop" value="<?php echo $class['MaLop']; ?>"/>
					</div>
					<div class="form-group">
					  <label for="makhoa">Mã khoa:</label>
					  <input type="text" class="form-control" id="makhoa" name="makhoa" value="<?php echo $class['MaKhoa']; ?>"/>
					</div>
					<div class="form-group">
					  <label for="makhoahoc">Mã khoa học:</label>
					  <input type="text" class="form-control" name="makhoahoc" id="makhoahoc" value="<?php echo $class['MaKhoaHoc']; ?>"/>
					</div>
					<div class="form-group">
					  <label for="mact">Mã chương trình:</label>
					  <input type="text" class="form-control" name="mact" id="mact" value="<?php echo $class['MaCT']; ?>"/>
					</div>
					<div class="form-group">
					  <label for="stt">STT:</label>
					  <input type="number" class="form-control" name="stt" id="stt" value="<?php echo $class['STT']; ?>"/>
					</div>
					<button class="btn btn-success">Lưu</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>