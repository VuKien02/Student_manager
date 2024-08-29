<<?php
	include('../connect.php');

	$s_MaMH = $_GET['MaMH'];

	$sql = "delete from giangkhoa where MaMH = '$s_MaMH'";
	$result = mysqli_query($connect,$sql);

	if($sql)
	{
		header("location: ./giangkhoa_index.php");
	}
?>