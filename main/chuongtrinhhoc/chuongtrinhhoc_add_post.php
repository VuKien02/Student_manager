<?php
	include('../connect.php');

	if (isset($_POST['mact'])) {
	$s_MaCT = $_POST['mact'];
	}

	if (isset($_POST['tenct'])) {
		$s_TenCT = $_POST['tenct'];
	}

	$sql = "insert into `chuongtrinhhoc` (`MaCT`, `TenCT`) values ('$s_MaCT', '$s_TenCT')";
	$result = mysqli_query($connect,$sql);
	echo $sql;

	if($sql)
	{
		header("location: ./chuongtrinhhoc_index.php");
	}
?>