<<?php
	include('../connect.php');

	$s_ID = $_GET['ID'];

	$sql = "delete from ketqua where ID = '$s_ID'";
	$result = mysqli_query($connect,$sql);

	if($sql)
	{
		header("location: ./ketqua_index.php");
	}
?>