<?php
	include('../connect.php');

	if (isset($_POST['malop'])) {
	$s_MaLop = $_POST['malop'];
	}

	if (isset($_POST['makhoa'])) {
		$s_MaKhoa = $_POST['makhoa'];
	}

	if (isset($_POST['makhoahoc'])) {
		$s_MaKhoaHoc = $_POST['makhoahoc'];
	}

	if (isset($_POST['mact'])) {
		$s_MaCT = $_POST['mact'];
	}

	if (isset($_POST['stt'])) {
		$s_STT = $_POST['stt'];
	}

	$sql = "insert into `Lop` (`MaLop`, `MaKhoa`, `MaKhoaHoc`, `MaCT`, `STT`) values ('$s_MaLop', '$s_MaKhoa', '$s_MaKhoaHoc', '$s_MaCT', '$s_STT')";
	$result = mysqli_query($connect,$sql);
	//echo $sql;

	if($sql)
	{
		header("location: ./lop_index.php");
	}
?>