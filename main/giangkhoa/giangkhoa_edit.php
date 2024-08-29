<<?php
	include('../connect.php');

	$s_MaMH = $_GET['MaMH'];

	$sql="select * from giangkhoa where MaMH = '$s_MaMH'";
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
	<form action="giangkhoa_edit_post.php" method="POST">
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Sửa thông giảng khoa</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
					  <label for="mact">Mã chương trình:</label>
					  <input type="text" class="form-control" name="mact" id="mact" value="<?php echo $class['MaCT']; ?>"/>
					</div>
					<div class="form-group">
					  <label for="makhoa">Mã khoa:</label>
					  <input type="text" class="form-control" id="makhoa" name="makhoa" value="<?php echo $class['MaKhoa']; ?>"/>
					</div>
					<div class="form-group">
					  <label for="mamh">Mã môn học:</label>
					  <input type="text" class="form-control" name="mamh" id="mamh" value="<?php echo $class['MaMH']; ?>"/>
					</div>
					<div class="form-group">
					  <label for="namhoc">Năm học:</label>
					  <input type="number" class="form-control" id="namhoc" name="namhoc" value="<?php echo $class['NamHoc']; ?>"/>
					</div>
					<div class="form-group">
					  <label for="hocky">Học kỳ:</label>
					  <input type="number" class="form-control" name="hocky" id="hocky" value="<?php echo $class['HocKy']; ?>"/>
					</div>
					<div class="form-group">
					  <label for="stlt">Tiết lý thuyết:</label>
					  <input type="number" class="form-control" name="stlt" id="stlt" value="<?php echo $class['STLT']; ?>"/>
					</div>
					<div class="form-group">
					  <label for="stth">Tiết thực hành:</label>
					  <input type="number" class="form-control" name="stth" id="stth" value="<?php echo $class['STTH']; ?>"/>
					</div>
					<div class="form-group">
					  <label for="sotinchi">Số tín chỉ:</label>
					  <input type="number" class="form-control" name="sotinchi" id="sotinchi" value="<?php echo $class['SoTinChi']; ?>"/>
					</div>
					<button class="btn btn-success">Lưu</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>