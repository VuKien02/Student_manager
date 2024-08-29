<<?php
	include('../connect.php');

	if (isset($_POST['mact'])) {
	$s_MaCT = $_POST['mact'];
	}

	if (isset($_POST['tenct'])) {
		$s_TenCT = $_POST['tenct'];
	}


	$sql = "update `chuongtrinhhoc` set MaCT = '$s_MaCT', TenCT = '$s_TenCT' where MaCT = '$s_MaCT'";
	$result = mysqli_query($connect,$sql);
	//echo $sql;
	if($sql)
	{
		header("location: ./chuongtrinhhoc_index.php");
	}
?>