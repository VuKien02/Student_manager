<?php
	include('../connect.php');
			
	$sql='SELECT * FROM giangkhoa';
	

	if (isset($_GET['s']) && $_GET['s'] != '') {
	$sql = 'select * from giangkhoa where MaMH like "%'.$_GET['s'].'%"';
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
				Quản lý thông tin lớp học
				<form method="get">
					<input type="text" name="s" class="form-control" style="margin-top: 15px; margin-bottom: 15px;" placeholder="Tìm kiếm theo mã môn học học">
				</form>
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Mã Chương Trình</th>
							<th>Mã Khoa</th>
							<th>Mã Môn Học</th>
							<th>Năm học</th>
							<th>Học Kỳ</th>
							<th>Tiết Lý Thuyết</th>
							<th>Tiết Thực Hành</th>
							<th>Số Tín Chỉ</th>
							<th>Giảng Viên</th>
							<th width="60px">Sửa</th>
							<th width="60px">Xóa</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php while ($class=mysqli_fetch_assoc($result)){ ?>
								<tr>
									<td><?php echo $class['MaCT'] ?></td>
									<td><?php echo $class['MaKhoa'] ?></td>
									<td><?php echo $class['MaMH'] ?></td>
									<td><?php echo $class['NamHoc'] ?></td>
									<td><?php echo $class['HocKy'] ?></td>
									<td><?php echo $class['STLT'] ?></td>
									<td><?php echo $class['STTH'] ?></td>
									<td><?php echo $class['SoTinChi'] ?></td>
									<td><?php echo $class['GiangVien'] ?></td>
									<td><a href="giangkhoa_edit.php?MaMH=<?= $class['MaMH']?>" ><button class="btn btn-warning">Sửa</button></a></td>
									<td><a href="giangkhoa_delete.php?MaMH=<?= $class['MaMH']?>" ><button class="btn btn-danger">Xóa</button></a></td>	
								</tr>
							<?php } ?>
						</tr>
					</tbody>
				</table>
				<a href="giangkhoa_add.php"><button class="btn btn-success">Thêm giảng khoa mới</button></a>
				<a href="../../index.html"><button class="btn btn-success">Về trang chủ</button></a>
			</div>
		</div>
	</div>

</body>
</html>