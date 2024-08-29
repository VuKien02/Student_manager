<<?php
	include('../connect.php');

	$s_MaMH = $_GET['MaMH'];

	$sql = "delete from monhoc where MaMH = '$s_MaMH'";
	$result = mysqli_query($connect,$sql);

	if($sql)
	{
		header("location: ./monhoc_index.php");
	}
?>