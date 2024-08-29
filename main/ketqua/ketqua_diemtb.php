<<?php
	include('../connect.php');

	$s_ID = $_GET['ID'];

	$sql = "UPDATE `ketqua` SET `DiemTB`=((`DiemCC`+`DiemHS1`+`DiemHS2`*2)/4)*0.4+DiemThi*0.6 WHERE ID = '$s_ID'";
	$result = mysqli_query($connect,$sql);
	//echo $sql;
	if($sql)
	{
		header("location: ./ketqua_index.php");
	}
?>