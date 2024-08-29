<<?php
	include('../connect.php');

	if (isset($_POST['mact'])) {
	$s_MaCT = $_POST['mact'];
	}

	if (isset($_POST['makhoa'])) {
		$s_MaKhoa = $_POST['makhoa'];
	}

	if (isset($_POST['mamh'])) {
		$s_MaMH = $_POST['mamh'];
	}

	if (isset($_POST['namhoc'])) {
	$s_NamHoc = $_POST['namhoc'];
	}

	if (isset($_POST['hocky'])) {
	$s_HocKy = $_POST['hocky'];
	}

	if (isset($_POST['stlt'])) {
	$s_STLT = $_POST['stlt'];
	}

	if (isset($_POST['stth'])) {
	$s_STTH = $_POST['stth'];
	}

	if (isset($_POST['sotinchi'])) {
	$s_SoTinChi = $_POST['sotinchi'];
	}

	$sql = "update `giangkhoa` set MaCT = '$s_MaCT', MaKhoa = '$s_MaKhoa', MaMH = '$s_MaMH', NamHoc = '$s_NamHoc', HocKy = '$s_HocKy', STLT = '$s_STLT', STTH = '$s_STTH', SoTinChi = '$s_SoTinChi' where MaMH = '$s_MaMH'";	
	$result = mysqli_query($connect,$sql);
	//echo $sql;

	if($sql)
	{
		header("location: ./giangkhoa_index.php");
	}
?>