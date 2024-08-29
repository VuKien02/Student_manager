<<?php
	include('../connect.php');

	$s_MaKhoaHoc = $_GET['MaKhoaHoc'];

	$sql="select * from khoahoc where MaKhoaHoc = '$s_MaKhoaHoc'";
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
	<form action="khoahoc_edit_post.php" method="POST">
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Sửa thông tin khoa học</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
					  <label for="makhoahoc">Mã Khoa học:</label>
					  <input type="text" class="form-control" name="makhoahoc" id="makhoahoc" value="<?php echo $class['MaKhoaHoc']; ?>"/>
					</div>
					<div class="form-group">
					  <label for="nambd">Năm bắt đầu:</label>
					  <input type="number" class="form-control" id="nambd" name="nambd" value="<?php echo $class['NamBatDau']; ?>" />
					</div>
					<div class="form-group">
					  <label for="namkt">Năm kết thúc:</label>
					  <input type="number" class="form-control" id="namkt" name="namkt" value="<?php echo $class['NamKetThuc']; ?>"/>
					</div>
					<button class="btn btn-success">Lưu</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>