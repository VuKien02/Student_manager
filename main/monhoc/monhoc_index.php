<?php
	include('../connect.php');
			
	$sql='SELECT * FROM monhoc';
	

	if (isset($_GET['s']) && $_GET['s'] != '') {
	$sql = 'select * from monhoc where MaMH like "%'.$_GET['s'].'%"';
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
							<th>Mã Môn Học</th>
							<th>Mã Khoa</th>
							<th>Tên Môn Học</th>
							<th width="60px">Sửa</th>
							<th width="60px">Xóa</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php while ($class=mysqli_fetch_assoc($result)){ ?>
								<tr>
									<td><?php echo $class['MaMH'] ?></td>
									<td><?php echo $class['MaKhoa'] ?></td>
									<td><?php echo $class['TenMH'] ?></td>
									<td><a href="monhoc_edit.php?MaMH=<?= $class['MaMH']?>" ><button class="btn btn-warning">Sửa</button></a></td>
									<td><a href="monhoc_delete.php?MaMH=<?= $class['MaMH']?>" ><button class="btn btn-danger">Xóa</button></a></td>	
								</tr>
							<?php } ?>
						</tr>
					</tbody>
				</table>
				<a href="monhoc_add.php"><button class="btn btn-success">Thêm môn học mới</button></a>
				<a href="../../index.html"><button class="btn btn-success">Về trang chủ</button></a>
			</div>
		</div>
	</div>

</body>
</html>