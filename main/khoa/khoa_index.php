<?php
	include('../connect.php');
			
	$sql='SELECT * FROM khoa';
	

	if (isset($_GET['s']) && $_GET['s'] != '') {
	$sql = 'select * from khoa where MaKhoa like "%'.$_GET['s'].'%"';
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
				Quản lý thông tin khoa
				<form method="get">
					<input type="text" name="s" class="form-control" style="margin-top: 15px; margin-bottom: 15px;" placeholder="Tìm kiếm theo mã khoa">
				</form>
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Mã Khoa</th>
							<th>Tên Khoa</th>
							<th>Năm Thành Lập</th>
							<th width="60px">Sửa</th>
							<th width="60px">Xóa</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php while ($class=mysqli_fetch_assoc($result)){ ?>
								<tr>
									<td><?php echo $class['MaKhoa'] ?></td>
									<td><?php echo $class['TenKhoa'] ?></td>
									<td><?php echo $class['NamThanhLap'] ?></td>
									<td><a href="khoa_edit.php?MaKhoa=<?= $class['MaKhoa']?>" ><button class="btn btn-warning">Sửa</button></a></td>
									<td><a href="khoa_delete.php?MaKhoa=<?= $class['MaKhoa']?>" ><button class="btn btn-danger">Xóa</button></a></td>	
								</tr>
							<?php } ?>
						</tr>
					</tbody>
				</table>
				<a href="khoa_add.php"><button class="btn btn-success">Thêm khoa mới</button></a>
				<a href="../../index.html"><button class="btn btn-success">Về trang chủ</button></a>
			</div>
		</div>
	</div>

</body>
</html>