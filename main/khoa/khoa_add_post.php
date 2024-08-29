<?php
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

	$sql = "insert into `khoa` (`MaKhoa`, `TenKhoa`, `NamThanhLap`) values ('$s_MaKhoa', '$s_TenKhoa', '$s_NamThanhLap')";
	$result = mysqli_query($connect,$sql);
	//echo $sql;

	if($sql)
	{
		header("location: ./khoa_index.php");
	}
?>