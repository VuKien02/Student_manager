<?php
	include('../connect.php');
			
	$sql='SELECT * FROM khoahoc';
	

	if (isset($_GET['s']) && $_GET['s'] != '') {
	$sql = 'select * from khoahoc where MaKhoaHoc like "%'.$_GET['s'].'%"';
	} 

	$result = mysqli_query($connect,$sql);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Student Management</title>
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
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Quản lý thông tin khoa học
				<form method="get">
					<input type="text" name="s" class="form-control" style="margin-top: 15px; margin-bottom: 15px;" placeholder="Tìm kiếm theo mã khoa hoc">
				</form>
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Mã Khoa Học</th>
							<th>Năm Bắt Đầu</th>
							<th>Năm Kết Thúc</th>
							<th width="60px">Sửa</th>
							<th width="60px">Xóa</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php while ($class=mysqli_fetch_assoc($result)){ ?>
								<tr>
									<td><?php echo $class['MaKhoaHoc'] ?></td>
									<td><?php echo $class['NamBatDau'] ?></td>
									<td><?php echo $class['NamKetThuc'] ?></td>
									<td><a href="khoahoc_edit.php?MaKhoaHoc=<?= $class['MaKhoaHoc']?>" ><button class="btn btn-warning">Sửa</button></a></td>
									<td><a href="khoahoc_delete.php?MaKhoaHoc=<?= $class['MaKhoaHoc']?>" ><button class="btn btn-danger">Xóa</button></a></td>	
								</tr>
							<?php } ?>
						</tr>
					</tbody>
				</table>
				<a href="khoahoc_add.php"><button class="btn btn-success">Thêm khoa học mới</button></a>
				<a href="../../index.html"><button class="btn btn-success">Về trang chủ</button></a>
			</div>
		</div>
	</div>

</body>
</html>