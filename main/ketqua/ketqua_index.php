<?php
	include('../connect.php');
			
	$sql='SELECT * FROM ketqua';
	

	if (isset($_GET['s']) && $_GET['s'] != '') {
	$sql = 'select * from ketqua where MaSV like "%'.$_GET['s'].'%"';
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
				Quản lý kết quả
				<form method="get">
					<input type="text" name="s" class="form-control" style="margin-top: 15px; margin-bottom: 15px;" placeholder="Tìm kiếm theo mã sinh viên">
				</form>
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>ID</th>
							<th>Mã Sinh Viên</th>
							<th>Mã Môn Học</th>
							<th>Điểm chuyên cần</th>
							<th>Điểm HS1</th>
							<th>Điểm HS2</th>
							<th>Lần Thi</th>
							<th>Điểm Thi</th>
							<th>Điểm TB</th>
							<th>Xếp Loại</th>
							<th width="60px">Sửa</th>
							<th width="60px">Xóa</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php while ($class=mysqli_fetch_assoc($result)){ ?>
								<tr>
									<td><?php echo $class['ID'] ?></td>
									<td><?php echo $class['MaSV'] ?></td>
									<td><?php echo $class['MaMH'] ?></td>
									<td><?php echo $class['DiemCC'] ?></td>
									<td><?php echo $class['DiemHS1'] ?></td>
									<td><?php echo $class['DiemHS2'] ?></td>
									<td><?php echo $class['LanThi'] ?></td>
									<td><?php echo $class['DiemThi'] ?></td>
									<td><?php echo $class['DiemTB'] ?></td>
									<td><?php echo $class['XepLoai'] ?></td>
									<td><a href="ketqua_edit.php?ID=<?= $class['ID']?>" ><button class="btn btn-warning">Sửa</button></a></td>
									<td><a href="ketqua_delete.php?ID=<?= $class['ID']?>" ><button class="btn btn-danger">Xóa</button></a></td>	
									<td><a href="ketqua_diemtb.php?ID=<?= $class['ID']?>"><button class="btn btn-info">Tính ĐTB</button></a></td>
									<td><a href="ketqua_update.php?ID=<?= $class['ID']?>"><button class="btn btn-info">Xếp loại</button></a></td>
								</tr>
							<?php } ?>
						</tr>
					</tbody>
				</table>
				<a href="Menu.php"><button class="btn btn-success">Về trang chủ</button></a>
				<a href="../../index.html"><button class="btn btn-success">Thêm mới</button></a>
			</div>
		</div>
	</div>

</body>
</html>