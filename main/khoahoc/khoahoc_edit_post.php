<<?php
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

	$sql = "update `khoahoc` set MaKhoaHoc = '$s_MaKhoaHoc', NamBatDau = '$s_NamBatDau', NamKetThuc = '$s_NamKetThuc' where MaKhoaHoc = '$s_MaKhoaHoc'";
	$result = mysqli_query($connect,$sql);
	//echo $sql;
	if($sql)
	{
		header("location: ./khoahoc_index.php");
	}
?>