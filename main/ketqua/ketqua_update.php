<<?php
	include('../connect.php');
	$s_ID = $_GET['ID'];



	$sql1 = "UPDATE `ketqua` SET `XepLoai`= 'XuatSac' WHERE `DiemTB` > 9";
	$sql2 = "UPDATE `ketqua` SET `XepLoai`= 'Gioi' WHERE `DiemTB` < 9 and `DiemTB` > 8";
	$sql3 = "UPDATE `ketqua` SET `XepLoai`= 'Kha' WHERE `DiemTB` < 8 and `DiemTB` > 5";
	$sql4 = "UPDATE `ketqua` SET `XepLoai`= 'TrungBinh' WHERE `DiemTB` < 5 and `DiemTB` > 2";
	$sql5 = "UPDATE `ketqua` SET `XepLoai`= 'Yeu' WHERE `DiemTB` < 2  ";
	$result = mysqli_query($connect,$sql1);
	$result = mysqli_query($connect,$sql2);
	$result = mysqli_query($connect,$sql3);
	$result = mysqli_query($connect,$sql4);
	$result = mysqli_query($connect,$sql5);
	//echo $sql;
	if($sql1)
	{
		header("location: ./ketqua_index.php");
	}
	else if ($sql2)
	{
		header("location: ./ketqua_index.php");
	}
	elseif($sql3)
	{
		header("location: ./ketqua_index.php");
	}
	elseif ($sql4) 
	{
		header("location: ./ketqua_index.php");
	}
	elseif ($sql5) 
	{
		header("location: ./ketqua_index.php");
	}
?>