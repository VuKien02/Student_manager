<<?php
	include('../connect.php');

	if (isset($_POST['id'])) {
	$s_ID = $_POST['id'];
	}

	if (isset($_POST['masv'])) {
	$s_MaSV = $_POST['masv'];
	}

	if (isset($_POST['mamh'])) {
		$s_MaMH = $_POST['mamh'];
	}

	if (isset($_POST['diemcc'])) {
	$s_DiemCC = $_POST['diemcc'];
	}

	if (isset($_POST['diemhs1'])) {
	$s_DiemHS1 = $_POST['diemhs1'];
	}
	if (isset($_POST['diemhs2'])) {
	$s_DiemHS2 = $_POST['diemhs2'];
	}

	if (isset($_POST['lanthi'])) {
	$s_LanThi = $_POST['lanthi'];
	}

	if (isset($_POST['diemthi'])) {
	$s_DiemThi = $_POST['diemthi'];
	}



	$sql = "update `ketqua` set ID = '$s_ID', MaSV = '$s_MaSV', MaMH = '$s_MaMH', DiemCC = '$s_DiemCC', DiemHS1 = '$s_DiemHS1', DiemHS2 = '$s_DiemHS2', LanThi = '$s_LanThi', DiemThi = '$s_DiemThi', DiemTB = 'NULL' where ID = '$s_ID'";
	$result = mysqli_query($connect,$sql);
	//echo $sql;

	if($sql)
	{
		header("location: ./ketqua_index.php");
	}
?>