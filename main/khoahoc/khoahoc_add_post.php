<?php
	include('../connect.php');

	if (isset($_POST['makhoahoc'])) {
	$s_MaKhoaHoc = $_POST['makhoahoc'];
	}

	if (isset($_POST['nambd'])) {
		$s_NamBatDau = $_POST['nambd'];
	}

	if (isset($_POST['namkt'])) {
		$s_NamKetThuc = $_POST['namkt'];
	}

	$sql = "insert into `khoahoc` (`MaKhoaHoc`, `NamBatDau`, `NamKetThuc`) values ('$s_MaKhoaHoc', '$s_NamBatDau', '$s_NamKetThuc')";
	$result = mysqli_query($connect,$sql);
	echo $sql;

	if($sql)
	{
		header("location: ./khoahoc_index.php");
	}
?>