<<?php
	include('../connect.php');

	if (isset($_POST['makhoa'])) {
	$s_MaKhoa = $_POST['makhoa'];
	}

	if (isset($_POST['tenkhoa'])) {
		$s_TenKhoa = $_POST['tenkhoa'];
	}

	if (isset($_POST['nam'])) {
		$s_NamThanhLap = $_POST['nam'];
	}

	$sql = "update `khoa` set MaKhoa = '$s_MaKhoa', TenKhoa = '$s_TenKhoa', NamThanhLap = '$s_NamThanhLap' where MaKhoa = '$s_MaKhoa'";
	$result = mysqli_query($connect,$sql);
	//echo $sql;
	if($sql)
	{
		header("location: ./khoa_index.php");
	}
?>