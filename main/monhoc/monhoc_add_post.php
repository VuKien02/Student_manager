<?php
	include('../connect.php');

	if (isset($_POST['mamon'])) {
	$s_MaMH = $_POST['mamon'];
	}

	if (isset($_POST['makhoa'])) {
		$s_MaKhoa = $_POST['makhoa'];
	}

	if (isset($_POST['tenmon'])) {
		$s_TenMH = $_POST['tenmon'];
	}

	$sql = "insert into `monhoc` (`MaMH`, `MaKhoa`, `TenMH`) values ( '$s_MaMH', '$s_MaKhoa', '$s_TenMH')";
	$result = mysqli_query($connect,$sql);
	//echo $sql;

	if($sql)
	{
		header("location: ./monhoc_index.php");
	}
?>