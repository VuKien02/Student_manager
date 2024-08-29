<?php
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

	$sql = "insert into `giangkhoa` (`MaCT`, `MaKhoa`, `MaMH`, `NamHoc` , `HocKy` , `STLT` , `STTH` , `SoTinChi`) values ('$s_MaCT', '$s_MaKhoa', '$s_MaMH' , '$s_NamHoc' , '$s_HocKy' , '$s_STLT' , '$s_STTH' , '$s_SoTinChi')";
	$result = mysqli_query($connect,$sql);
	//echo $sql;

	if($sql)
	{
		header("location: ./giangkhoa_index.php");
	}
?>