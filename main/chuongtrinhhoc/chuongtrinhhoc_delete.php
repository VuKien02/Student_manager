<<?php
	include('../connect.php');

	$s_MaCT = $_GET['MaCT'];

	$sql = "delete from chuongtrinhhoc where MaCT = '$s_MaCT'";
	$result = mysqli_query($connect,$sql);

	if($sql)
	{
		header("location: ./chuongtrinhhoc_index.php");
	}
?>