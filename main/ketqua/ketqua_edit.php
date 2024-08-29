<<?php
	include('../connect.php');

	$s_ID = $_GET['ID'];

	$sql="select * from ketqua where ID = '$s_ID'";
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
	<form action="ketqua_edit_post.php" method="POST">
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Sửa kết quả</h2>
			</div>
			<div class="panel-body">
				<form method="post">
				<div class="form-group">
					  <label for="id">ID:</label>
					  <input type="number" class="form-control" name="id" id="id" value="<?php echo $class['ID']; ?>"/>
					</div>
					<div class="form-group">
					  <label for="masv">Mã sinh viên:</label>
					  <input type="text" class="form-control" name="masv" id="masv" value="<?php echo $class['MaSV']; ?>"/>
					</div>
					<div class="form-group">
					  <label for="mamh">MaMH:</label>
					  <input type="text" class="form-control" id="mamh" name="mamh" value="<?php echo $class['MaMH']; ?>"/>
					</div>
					<div class="form-group">
					  <label for="diemcc">Điểm chuyên cần:</label>
					  <input type="number" class="form-control" name="diemcc" id="diemcc" value="<?php echo $class['DiemCC']; ?>"/>
					</div>
					<div class="form-group">
					  <label for="diemhs1">Điểm HS1:</label>
					  <input type="number" class="form-control" name="diemhs1" id="diemhs1" value="<?php echo $class['DiemHS1']; ?>"/>
					</div>
					<div class="form-group">
					  <label for="diemhs2">Điểm HS2:</label>
					  <input type="number" class="form-control" name="diemhs2" id="diemhs2" value="<?php echo $class['DiemHS2']; ?>"/>
					</div>
					<div class="form-group">
					  <label for="lanthi">Lần thi:</label>
					  <input type="number" class="form-control" name="lanthi" id="lanthi" value="<?php echo $class['LanThi']; ?>"/>
					</div>
					<div class="form-group">
					  <label for="diemthi">Điểm thi:</label>
					  <input type="number" class="form-control" name="diemthi" id="diemthi" value="<?php echo $class['DiemThi']; ?>"/>
					</div>
					<button class="btn btn-success">Lưu</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>