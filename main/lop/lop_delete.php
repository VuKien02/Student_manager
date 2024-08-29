<<?php
	include('../connect.php');

	$s_MaLop = $_GET['MaLop'];

	$sql = "delete from lop where MaLop = '$s_MaLop'";
	$result = mysqli_query($connect,$sql);

	if($sql)
	{
		header("location: ./lop_index.php");
	}
?>