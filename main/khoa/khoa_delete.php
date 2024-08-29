<<?php
	include('../connect.php');

	$s_MaKhoa = $_GET['MaKhoa'];

	$sql = "delete from khoa where MaKhoa = '$s_MaKhoa'";
	$result = mysqli_query($connect,$sql);

	if($sql)
	{
		header("location: ./khoa_index.php");
	}
?>