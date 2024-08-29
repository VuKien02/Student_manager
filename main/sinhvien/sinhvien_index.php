<?php
	include('../connect.php');
			
	$sql='SELECT * FROM sinhvien';
	

	if (isset($_GET['s']) && $_GET['s'] != '') {
	$sql = 'select * from sinhvien where MaSV like "%'.$_GET['s'].'%"';
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
				Quản lý thông tin sinh viên
				<form method="get">
					<input type="text" name="s" class="form-control" style="margin-top: 15px; margin-bottom: 15px;" placeholder="Tìm kiếm theo mã sinh viên">
				</form>
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Mã Sinh Viên</th>
							<th>Họ Tên</th>
							<th>Năm Sinh</th>
							<th>Dân Tộc</th>
							<th>Mã Lớp</th>
							<th width="60px">Sửa</th>
							<th width="60px">Xóa</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php while ($class=mysqli_fetch_assoc($result)){ ?>
								<tr>
									<td><?php echo $class['MaSV'] ?></td>
									<td><?php echo $class['HoTen'] ?></td>
									<td><?php echo $class['NamSinh'] ?></td>
									<td><?php echo $class['DanToc'] ?></td>
									<td><?php echo $class['MaLop'] ?></td>
									<td><a href="sinhvien_edit.php?MaSV=<?= $class['MaSV']?>" ><button class="btn btn-warning">Sửa</button></a></td>
									<td><a href="sinhvien_delete.php?MaSV=<?= $class['MaSV']?>" ><button class="btn btn-danger">Xóa</button></a></td>	
								</tr>
							<?php } ?>
						</tr>
					</tbody>
				</table>
				<a href="sinhvien_add.php"><button class="btn btn-success">Thêm sinh viên mới</button></a>
				<a href="../../index.html"><button class="btn btn-success">Về trang chủ</button></a>
			</div>
		</div>
	</div>

</body>
</html>