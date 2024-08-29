<<?php
	include('../connect.php');

	if (isset($_POST['masv'])) {
	$s_MaSV = $_POST['masv'];
	}

	if (isset($_POST['hoten'])) {
		$s_HoTen = $_POST['hoten'];
	}

	if (isset($_POST['namsinh'])) {
		$s_NamSinh = $_POST['namsinh'];
	}

	if (isset($_POST['dantoc'])) {
		$s_DanToc = $_POST['dantoc'];
	}

	if (isset($_POST['malop'])) {
		$s_MaLop = $_POST['malop'];
	}

	$sql = "update `sinhvien` set MaSV = '$s_MaSV', HoTen = '$s_HoTen', NamSinh = '$s_NamSinh', DanToc = '$s_DanToc', MaLop = '$s_MaLop' where MaSV = '$s_MaSV'";
	$result = mysqli_query($connect,$sql);
	//echo $sql;
	if($sql)
	{
		header("location: ./sinhvien_index.php");
	}
?>