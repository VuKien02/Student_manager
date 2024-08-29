<<?php
	include('../connect.php');

	$s_MaKhoaHoc = $_GET['MaKhoaHoc'];

	$sql = "delete from khoahoc where MaKhoaHoc = '$s_MaKhoaHoc'";
	$result = mysqli_query($connect,$sql);

	if($sql)
	{
		header("location: ./khoahoc_index.php");
	}
?>