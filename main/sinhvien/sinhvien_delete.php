<<?php
	include('../connect.php');

	$s_MaSV = $_GET['MaSV'];

	$sql = "delete from sinhvien where MaSV = '$s_MaSV'";
	$result = mysqli_query($connect,$sql);

	if($sql)
	{
		header("location: ./sinhvien_index.php");
	}
?>